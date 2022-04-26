import ValueElement from "./core/ValueElement.js";

/**
 * A hidden element to display on the page
 */
export default
{
	extends: ValueElement,
	name: "hidden",

	template:
	`
		<input type="hidden" :value="values[data.name]" />
	`,
	
	methods:
	{
		/**
		 * A label for an ancestor Generator somewhere
		 * @return	{string}	A label for an ancestor
		 */
		getGeneratorLabel: function()
		{
			return this.values[this.data.name];
		},
		
		/**
		 * Checks if this element has a valid value
		 * @return	{Boolean}	Always true, since hidden elements should always be valid
		 */
		validate: function()
		{
			return true;
		}
	}
};