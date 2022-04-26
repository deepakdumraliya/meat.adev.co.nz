import ElementBase from "../core/ElementBase.js";
import ValueElement, {validateRequiredText} from "../core/ValueElement.js";

/**
 * Displays a time picker to the user
 */
export default
{
	extends: ValueElement,
	name: "time-element",
	
	template:
	`
		<element-base class="date-time-wrapper" :wrap-label="true" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<input type="time" v-model="values[data.name]" :disabled="disabled" ref="input" @input="validate" />
		</element-base>
	`,
	
	components: {"element-base": ElementBase},
	
	methods:
	{
		/**
		 * Gets a label for an ancestor element somewhere
		 * @return	{string|null}	The current value of the element
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