import DateElement from "./DateElement.js";

/**
 * Allows a user to pick a date and time
 */
export default
{
	name: "date-time-element",
	
	template:
	`
		<date-element :data="data" :values="values" with-time="true" :disabled="disabled" ref="dateElement" />
	`,
	
	components: {"date-element": DateElement},
	
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
			this.$refs.dateElement.focus();
		},
		
		/**
		 * Gets a label for an ancestor element somewhere
		 * @return	{string|null}	The current value of the element
		 */
		getGeneratorLabel: function()
		{
			return this.$refs.dateElement.getGeneratorLabel();
		},
		
		/**
		 * Checks if this element is valid
		 * @return	{boolean}	Whether it's a valid element
		 */
		validate: function()
		{
			return this.$refs.dateElement.validate();
		}
	}
};