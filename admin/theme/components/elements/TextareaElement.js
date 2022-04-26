import ElementBase from "./core/ElementBase.js";
import ValueElement, {validateRequiredText} from "./core/ValueElement.js";

/**
 * A textarea to display in the form
 */
export default
{
	extends: ValueElement,
	name: "textarea-element",

	template:
	`
		<element-base :wrap-label="true" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<textarea v-model="values[data.name]" :disabled="disabled" ref="textarea" @input="validate" />
		</element-base>
	`,

	components: {"element-base": ElementBase},
	
	methods:
	{
		/**
		 * Gets a label to display in an ancestor Generator FormElement
		 * @return	{string}	The current contents of this element
		 */
		getGeneratorLabel: function()
		{
			return this.values[this.data.name];
		},
		
		/**
		 * Focuses the browser on this element
		 */
		focus: function()
		{
			this.$refs.textarea.focus();
		}
	},
	
	validations:
	{
		required: validateRequiredText
	}
};