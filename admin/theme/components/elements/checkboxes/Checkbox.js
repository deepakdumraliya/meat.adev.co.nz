import CheckboxIndicator from "./CheckboxIndicator.js";
import ElementBase from "../core/ElementBase.js";
import ValueElement from "../core/ValueElement.js";

/**
 * A single checkbox toggle to display in the form
 */
export default
{
	extends: ValueElement,
	name: "checkbox",

	template:
	`
		<element-base class="checkbox-element" :wrap-label="true" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<input type="checkbox" v-model="values[data.name]" :disabled="disabled" ref="input" @change="validate" /> <checkbox-indicator />
		</element-base>
	`,

	components:
	{
		"checkbox-indicator": CheckboxIndicator,
		"element-base": ElementBase
	},

	methods:
	{
		/**
		 * Gets a label for an ancestor element, though I can't think of why you'd use a checkbox as a label element
		 * @return	{string}	"Checked" : "Unchecked", depending on if the toggle is on or not
		 */
		getGeneratorLabel: function()
		{
			return this.values[this.data.name] ? "Checked" : "Unchecked";
		},
		
		/**
		 * Focuses the browser on this element
		 */
		focus: function()
		{
			this.$refs.input.focus();
		},
	},
	
	validations:
	{
		/**
		 * Checks whether this checkbox is required
		 * @param	{boolean}		value	The current value of this checkbox
		 * @return 	{string|null}			The error message, or null if it's valid
		 */
		required: function(value)
		{
			return value === false ? "This field is required" : null;
		}
	}
};