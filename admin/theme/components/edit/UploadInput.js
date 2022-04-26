import Remove from "../widgets/Remove.js";
import {getFilenameFromUrl} from "../../scripts/utility.js";

/**
 * Equivalent to an upload input, but with more bells and whistles
 */
export default
{
	name: "UploadInput",
	
	template:
	`
		<div class='file-upload' :class="{'drag-target': dragTarget}" @drop.prevent="drop" @dragenter="dragTarget = true" @dragleave="dragTarget = false" @dragover.prevent="dragTarget = true">
			<input type="file" hidden="hidden" :accept="accept" :multiple="multiple" @change="change" ref="fileInput" />
			<button class="button select-button" type="button" @click="$refs.fileInput.click()" :disabled="disabled" ref="button">{{ label || "Select a file" }}</button>
			<span class="details" v-if="!buttonOnly">
				<remove @remove="remove" v-if="value !== null" />
				<span v-if="value === null" class="name">
					No file selected
				</span>
				<a v-else class="name" href="#" @click.prevent="preview()">{{ name }}</a>
			</span>
		</div>
	`,

	components: {"remove": Remove},
	
	props:
	{
		value: [String, File],		// The current value for this input, either a File object or the path to the file on the server
		accept: [String, Boolean],	// The accepts parameter to pass to the base input, e.g. ".jpg,.png". Pass false or undefined to not use this attribute
		disabled: Boolean,			// Whether this input is disabled
		buttonOnly: Boolean,		// Whether to omit the filename from the output
		multiple: Boolean,			// Whether to accept multiple files
		label: String				// A label to output when no file is selected, defaults to "Select a file"
	},
	
	data: function()
	{
		return {
			dragTarget: false
		}
	},

	computed:
	{
		/**
		 * Works out what the name of the current file is
		 * @return	{string}	The name of the current file
		 */
		name: function()
		{
			if(this.value instanceof File)
			{
				return this.value.name;
			}
			else
			{
				return getFilenameFromUrl(this.value);
			}
		}
	},

	methods:
	{
		/**
		 * Sends the updated value(s) to the parent component after the value is changed
		 * @param	{File[]}	fileList	The list of files to send
		 */
		update: function(fileList)
		{
			if(this.multiple)
			{
				this.$emit("input", fileList);
			}
			else if(fileList.length > 0)
			{
				this.$emit("input", fileList[0]);
			}
			else
			{
				this.$emit("input", null);
			}
		},
		
		/**
		 * Checks if a specific file matches a specific type
		 * @param	{File}		file	The file to check
		 * @param	{string}	type	The string to check
		 * @return	{boolean}			Whether that file matches that type
		 */
		checkFileMatchesType: function(file, type)
		{
			// This is a file extension
			if(type.startsWith("."))
			{
				return file.name.endsWith(type);
			}
			// This is a wildcard type
			else if(type.endsWith("*"))
			{
				let match = type.substring(0, type.length - 2);
				return file.type.startsWith(match);
			}
			// This is a normal MIME type
			else
			{
				return file.type === type;
			}
		},
		
		/**
		 * Checks if a specific file matches the accepts string
		 * @param	{File}		file	The file to check
		 * @return	{boolean}			Whether that file matches
		 */
		checkFileIsAcceptable: function(file)
		{
			if(this.accept === null || this.accept === undefined)
			{
				return true;
			}
			
			let matches = this.accept.split(",");
			
			for(let match of matches)
			{
				if(this.checkFileMatchesType(file, match.trim()))
				{
					return true;
				}
			}
			
			return false;
		},
		
		/**
		 * Triggered when the user drops a file onto the file label
		 * @param	{DragEvent}		event	The event that triggered the drop
		 */
		drop: function(event)
		{
			this.dragTarget = false;
			
			let fileList = [];
			
			for(let item of event.dataTransfer.items)
			{
				if(item.kind === "file")
				{
					let file = item.getAsFile();
					
					// Check that all the files match the "accepts" parameter, if it's defined
					if(this.checkFileIsAcceptable(file))
					{
						fileList.push(file);
					}
				}
			}
			
			// Ignore a drag that doesn't have any valid files
			if(fileList.length === 0)
			{
				return;
			}
			
			this.update(fileList);
		},
		
		/**
		 * Triggered when the user changes the value by uploading files through the file input
		 * @param	{Event}		event	The event that triggered the change
		 */
		change: function(event)
		{
			let fileList = event.target.files;
			
			this.update(fileList);
			
			event.target.value = "";
		},
		
		/**
		 * Removes the current file and sets the value to null
		 */
		remove: function()
		{
			this.$emit("input", null);
		},
		
		/**
		 * Opens the file in a new tab
		 */
		preview: function()
		{
			if(this.value instanceof File)
			{
				let reader = new FileReader();

				reader.addEventListener("load", function()
				{
					// noinspection JSCheckFunctionSignatures
					window.open(reader.result, "_blank");
				});

				reader.readAsDataURL(this.value);
			}
			else
			{
				window.open(this.value, "_blank");
			}
		},
		
		/**
		 * Triggers focus on the file element
		 */
		focus: function()
		{
			this.$refs.button.focus();
		}
	}
};