import ElementBase from "../core/ElementBase.js";
import Picker from "../../picker/Picker.js";
import ValueElement, {validateRequiredText} from "../core/ValueElement.js";
import {startBasicTinymce, startTinymce} from "../../../scripts/tinymce.js";
import {uniqueId} from "../../../scripts/utility.js";
import eventHub from "../../edit/eventHub.js";

/**
 * A TinyMCE editor, that may or may not be stripped down
 */
export default
{
	extends: ValueElement,
	name: "editor",
	
	template:
		`
		<element-base :wrap-label="true" :label="data.label" :info="data.info" :details="data.details" :error="error">
			<div v-for="editorId in editorIds" :key="editorId">
				<textarea class="editor" :class="{basic: isBasic}" v-model="values[data.name]" ref="textarea" :id="editorId" />
			</div>
			<picker v-if="pickerCallback !== undefined" :callback="pickerCallback" :type="pickerType" />
		</element-base>
	`,
	
	components:
	{
		"element-base": ElementBase,
		"picker": Picker
	},
	
	props:
	{
		isBasic: Boolean	// Whether this is the stripped down editor or not
	},
	
	data: function()
	{
		return {
			editor: undefined,
			editorIds: [uniqueId()],
			pickerCallback: undefined,
			pickerType: undefined
		}
	},
	
	created: function()
	{
		// Refresh the TinyMCE instance every time a sort is triggered
		eventHub.$on("sort-triggered", async () =>
		{
			if(this.editor === undefined)
			{
				return;
			}
			
			this.editorIds = [uniqueId()];
			await this.initTinymce();
		});
	},
	
	mounted: async function()
	{
		await this.initTinymce();
	},
	
	beforeDestroy: function()
	{
		this.editor?.destroy(false);
	},
	
	watch:
	{
		disabled: function(disabled)
		{
			this.editor.setMode(disabled ? "readonly" : "design");
		}
	},
	
	methods:
	{
		initTinymce: async function()
		{
			// Wait until the element has been added to the DOM before initialising TinyMCE
			await Vue.nextTick();
			
			let promise;
			
			if(this.isBasic)
			{
				promise = startBasicTinymce(this.$refs.textarea[0]);
			}
			else
			{
				promise = startTinymce(this.$refs.textarea[0], (callback, value, metadata) =>
				{
					this.pickerType = metadata.filetype;
					this.pickerCallback = (path) =>
					{
						this.pickerCallback = undefined;
						
						if(path !== null)
						{
							callback(path);
						}
					}
				});
			}
			
			let editors = await promise;
			let editor = editors[0];
			
			// Whenever the editor loses focus and the content has updated, update the model. Using a fat arrow closure to retain 'this' binding
			editor.on("change", () =>
			{
				this.validate();
			});
			
			if(this.disabled)
			{
				editor.setMode("readonly");
			}
			
			this.editor = editor;
		},
		
		/**
		 * Focuses the browser on this element
		 */
		focus: function()
		{
			this.editor.focus();
		},
		
		/**
		 * Gets a label to use for an ancestor Generator
		 * @return	{string}	The editor content, stripped of HTML tags
		 */
		getGeneratorLabel: function()
		{
			let div = document.createElement("div");
			div.innerHTML = this.values[this.data.name];
			
			return div.textContent;
		},
		
		/**
		 * Checks if this element is valid
		 * @return	{boolean}	Whether this element is valid
		 */
		validate: function()
		{
			this.values[this.data.name] = this.editor.getContent();
			return ValueElement.methods.validate.call(this);
		}
	},
	
	validations:
	{
		required: validateRequiredText
	}
};