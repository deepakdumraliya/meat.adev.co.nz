import ElementBase from "./core/ElementBase.js";
import ValueElement, {validateRequiredText} from "./core/ValueElement.js";

/**
 * A text input to display in the form
 */
export default
{
	extends: ValueElement,
	name: "colour-picker",
	
	template:
		`
		<element-base :wrap-label="true" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<input type="color" v-model="values[data.name]" :disabled="disabled" ref="input" @input="validate" />
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
			this.$refs.input.focus();
		}
	},
	
	validations:
	{
		required: validateRequiredText
	}
};