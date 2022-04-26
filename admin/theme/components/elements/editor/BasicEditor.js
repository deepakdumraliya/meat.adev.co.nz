import Editor from "./Editor.js";

/**
 * A stripped down TinyMCE editor, with only some basic text formatting
 */
export default
{
	name: "basic-editor",
	
	template:
	`
		<editor :data="data" :values="values" :is-basic="true" :disabled="disabled" ref="editor" />
	`,

	components: {"editor": Editor},
	
	props:
	{
		data: Object,		// Data about this element
		values: Object,		// All sibling values, including this element
		disabled: Boolean	// Whether this element is currently disabled
	},
	
	methods:
	{
		/**
		 * Focuses the browser on this element
		 */
		focus: function()
		{
			this.$refs.editor.focus();
		},
		
		/**
		 * Gets a label to use for an ancestor Generator
		 * @return	{string}	The editor content, stripped of HTML tags
		 */
		getGeneratorLabel: function()
		{
			return this.$refs.editor.getGeneratorLabel();
		},
		
		/**
		 * Checks if this element is valid
		 * @return	{boolean}	Whether this element is valid
		 */
		validate: function()
		{
			return this.$refs.editor.validate();
		}
	}
};