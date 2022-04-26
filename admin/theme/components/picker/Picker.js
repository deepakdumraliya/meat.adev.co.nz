import AddSvg from "../svgs/AddSvg.js";
import FileSummary from "./FileSummary.js";
import FolderSummary from "./FolderSummary.js";

export default
{
	name: "picker",
	
	template:
	`
		<div class="file-picker-popup" @click="callback(null)">
			<div class="file-picker" @click.stop="">
				<div class="title">
					<h1>
						{{ type.charAt(0).toUpperCase() }}{{ type.substring(1) }} Library
					</h1>
                	<button class="close-button" type="button" @click.prevent="callback(null)">Close</button>
				</div>
				<div class="button-holder">
					<div class="buttons">
                      <label class="button" type="button">Upload new {{ type }} <input type="file" hidden="hidden" :accept="type === 'image' ? '.png,.jpg,.jpeg,.gif' : ''" @change="uploadFile" /></label>
						<button class="button" type="button" @click.prevent="createFolder">Make new folder</button>
					</div>
					<label class="filter-holder">
						<span>Filter by keyword</span> <input class="filter" type="search" v-model="filter" />
					</label>
				</div>
				<div class="file-list" :class="type">
					<p class="info warning" v-if="error !== null">
						{{ error }}
					</p>
					<p class="info" v-if="loading">
						Loading {{ type }}s, please wait.
					</p>
					<p class="info" v-else-if="parent === null && files.length + folders.length === 0">
						You have not uploaded any {{ type }}s, yet. Click the "Upload new {{ type }}" button to upload a new {{ type }}.
					</p>
					<ul class="list">
						<folder-summary v-if="parent !== null" draggable="false" :folder="parent" :isParent="true" @select="selectFolder(parent)" @drop="moveCurrent(parent)" ref="parentFolder" />
						<folder-summary v-for="folder in filteredFolders" :key="folder.path" draggable="true" :folder="folder" @select="selectFolder(folder)" @rename="renameFolder(folder)" @delete="deleteFolder(folder)" @dragstart="startDrag($event, folder)" @drop="moveCurrent(folder)" @dragend="currentDrag = null" ref="folders" />
						<file-summary v-for="file in filteredFiles" :key="file.path" draggable="true" :file="file" @select="selectFile(file)" @rename="renameFile(file)" @delete="deleteFile(file)" @dragstart="startDrag($event, file)" @dragend="currentDrag = null" />
					</ul>
				</div>
			</div>
		</div>
	`,
	
	components:
	{
		"add-svg": AddSvg,
		"file-summary": FileSummary,
		"folder-summary": FolderSummary
	},
	
	props:
	{
		callback: Function,		// The callback to call when the file is selected
		type: String			// The type of picker to display
	},
	
	data: function()
	{
		return {
			error: null,
			parent: null,
			files: [],
			folders: [],
			loading: true,
			currentPath: null,
			filter: "",
			currentDrag: null
		};
	},
	
	computed:
	{
		filteredFolders: function()
		{
			return this.folders.filter((folder) => folder.filename.toLowerCase().includes(this.filter.toLowerCase()));
		},
		
		filteredFiles: function()
		{
			return this.files.filter((file) => file.filename.toLowerCase().includes(this.filter.toLowerCase()));
		}
	},
	
	created: function()
	{
		let ignored = this.loadFiles();
	},
	
	methods:
	{
		/**
		 * Gets the first part of the URL for all picker requests
		 * @return	{string}	The first part of the URL
		 */
		getRequestPrefix: function()
		{
			return `/admin/picker/${this.type}`;
		},
		
		/**
		 * Does a post request to a specific picker path
		 * @param	{string}			path		The path to submit to, excluding the first consistent part
		 * @param	{Object}			parameters	The parameters to submit
		 * @return	{Promise<Object>}				The result of the request
		 */
		doPostRequest: async function(path, parameters)
		{
			let url = `${this.getRequestPrefix()}${path}`;
			let formData = new FormData;
			
			for(let [key, value] of Object.entries(parameters))
			{
				if(value instanceof File)
				{
					formData.append(key, value, value.name);
				}
				else
				{
					formData.append(key, value);
				}
			}
			
			let response = await window.fetch(url,
			{
				method: "post",
				body: formData
			});
			
			let json = await response.json();
			
			if(json.error !== undefined)
			{
				
				throw json.error;
			}
			
			return json;
		},
		
		/**
		 * Retrieves the file/folder output for a specific folder
		 * @param	{string|undefined}	folder	The folder to get the output for, or undefined for the root folder
		 * @return	{Promise<Object>}			The details about the folder contents
		 */
		getOutputRequest: async function(folder)
		{
			let url = `${this.getRequestPrefix()}/output/`;
			
			if(folder !== undefined)
			{
				url += "?" + new URLSearchParams({folder: folder});
			}
			
			let response = await window.fetch(url);
			return await response.json();
		},
		
		/**
		 * Creates a new folder
		 * @param	{string}			parent		The path to the parent folder
		 * @param	{string}			filename	The filename for the folder to create (may be sanitised)
		 * @return	{Promise<Object>}				The new details about that folder
		 */
		createFolderRequest: async function(parent, filename)
		{
			return await this.doPostRequest("/folder/create/", {parent: parent, filename: filename});
		},
		
		/**
		 * Renames a specific folder
		 * @param	{string}			folder		The path to the folder to rename
		 * @param	{string}			filename	What to rename it to (may be sanitised)
		 * @return	{Promise<Object>}				The new details for that folder
		 */
		renameFolderRequest: async function(folder, filename)
		{
			return await this.doPostRequest("/folder/rename/", {folder: folder, filename: filename});
		},
		
		/**
		 * Moves a folder to another folder
		 * @param	{string}			folder	The path to the folder to move
		 * @param	{string}			parent	The path to the parent folder to move the folder into
		 * @return	{Promise<Object>}			New details about the moved folder
		 */
		moveFolderRequest: async function(folder, parent)
		{
			return await this.doPostRequest("/folder/move/", {folder: folder, parent: parent});
		},
		
		/**
		 * Deletes a folder
		 * @param	{string}			folder	The path to the folder to delete
		 * @return	{Promise<Object>}			Whether the request succeeded
		 */
		deleteFolderRequest: async function(folder)
		{
			return await this.doPostRequest("/folder/delete/", {folder: folder});
		},
		
		/**
		 * Uploads a new file
		 * @param	{File}				file	The file to upload
		 * @param	{string}			folder	The folder to upload the file into
		 * @return	{Promise<Object>}			Details about the uploaded file
		 */
		uploadFileRequest: async function(file, folder)
		{
			return await this.doPostRequest("/file/upload/", {file: file, folder: folder});
		},
		
		/**
		 * Renames a file
		 * @param	{string}			file		The path to the file to rename
		 * @param	{string}			filename	The name to give the file (may be sanitised)
		 * @return	{Promise<Object>}				Details about the renamed file
		 */
		renameFileRequest: async function(file, filename)
		{
			return await this.doPostRequest("/file/rename/", {file: file, filename: filename});
		},
		
		/**
		 * Moves a file
		 * @param	{string}			file	The path to the file to move
		 * @param	{string}			folder	The path to the folder to move the file into
		 * @return	{Promise<Object>}			Details about the moved file
		 */
		moveFileRequest: async function(file, folder)
		{
			return await this.doPostRequest("/file/move/", {file: file, folder: folder});
		},
		
		/**
		 * Uploads a file that might be a modification of a modification of an existing file, in which case it will probably be overwritten.
		 * @param	{File}				file	The file to upload
		 * @param	{string}			folder	The folder to upload the file into (if it's new)
		 * @return	{Promise<Object>}			Details about the uploaded file
		 */
		modifyFileRequest: async function(file, folder)
		{
			return await this.doPostRequest("/file/modify/", {file: file, folder: folder});
		},
		
		/**
		 * Deletes a file
		 * @param	{string}			file	The path to the file to delete
		 * @return	{Promise<Object>}			Whether the request succeeded
		 */
		deleteFileRequest: async function(file)
		{
			return await this.doPostRequest("/file/delete/", {file: file});
		},
		
		loadFiles: async function()
		{
			this.loading = true;
			let data = await this.getOutputRequest(this.currentPath === null ? undefined : this.currentPath);
			this.currentPath = data.path;
			this.parent = data.parent;
			this.folders = data.folders;
			this.files = data.files;
			this.loading = false;
		},
		
		createFolder: async function()
		{
			let filename = window.prompt("Please enter a filename");
			
			if(!filename)
			{
				return;
			}
			
			let folder = await this.createFolderRequest(this.currentPath, filename);
			this.folders.push(folder);
		},
		
		selectFolder: async function(folder)
		{
			this.currentPath = folder.path;
			await this.loadFiles();
		},
		
		renameFolder: async function(folder)
		{
			let filename = window.prompt("Please enter a filename");
			
			if(!filename)
			{
				return;
			}
			
			let updatedFolder = await this.renameFolderRequest(folder.path, filename);
			Object.assign(folder, updatedFolder);
		},
		
		deleteFolder: async function(folder)
		{
			await this.deleteFolderRequest(folder.path);
			let index = this.folders.indexOf(folder);
			
			if(index > -1)
			{
				this.folders.splice(index, 1);
			}
		},
		
		uploadFile: async function(event)
		{
			let file = event.target.files[0];
			this.loading = true;
			let fileData = await this.uploadFileRequest(file, this.currentPath);
			this.loading = false;
			
			this.callback(fileData.path);
		},
		
		selectFile: async function(file)
		{
			this.callback(file.path);
		},
		
		renameFile: async function(file)
		{
			let filename = window.prompt("Please enter a filename");
			
			if(!filename)
			{
				return;
			}
			
			let updatedFile = await this.renameFileRequest(file.path, filename);
			Object.assign(file, updatedFile);
		},
		
		moveCurrent: async function(folder)
		{
			let current = this.currentDrag;
			
			if(current === undefined)
			{
				return;
			}
			
			if(current.type === "file")
			{
				await this.moveFileRequest(current.path, folder.path);
				let index = this.files.indexOf(current);
				
				if(index > -1)
				{
					this.files.splice(index, 1);
				}
			}
			else
			{
				await this.moveFolderRequest(current.path, folder.path);
				let index = this.folders.indexOf(current);
				
				if(index > -1)
				{
					this.files.splice(index, 1);
				}
			}
			
			if(this.$refs.parentFolder !== undefined)
			{
				this.$refs.parentFolder.dropTarget = false;
			}
			
			if(this.$refs.folders !== undefined)
			{
				this.$refs.folders.forEach((folder) => folder.dropTarget = false);
			}
		},
		
		deleteFile: async function(file)
		{
			await this.deleteFileRequest(file.path);
			let index = this.files.indexOf(file);
			
			if(index > -1)
			{
				this.files.splice(index, 1);
			}
		},
		
		startDrag: function(event, item)
		{
			event.dataTransfer.setData("text/plain", item.path);
			event.dataTransfer.dropEffect = "move";
			
			this.currentDrag = item;
		}
	}
};