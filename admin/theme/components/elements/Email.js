import ElementBase from "./core/ElementBase.js";
import ValueElement, {validateRequiredText} from "./core/ValueElement.js";

/**
 * A single element email input element
 */
export default
{
	extends: ValueElement,
	name: "email",

	template:
	`
		<element-base :wrap-label="true" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<input type="email" v-model="values[data.name]" :disabled="disabled" @input="validate" />
		</element-base>
	`,

	components: {"element-base": ElementBase},

	methods:
	{
		/**
		 * Gets the value to use as a label from this element
		 * @return	{string}	The value
		 */
		getGeneratorLabel: function()
		{
			return this.values[this.data.name];
		}
	},
	
	validations:
	{
		required: validateRequiredText
	}
};