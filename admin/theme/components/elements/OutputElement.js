import ElementBase from "./core/ElementBase.js";

/**
 * Displays a value next to a label inside of a form
 */
export default
{
	name: "output-element",
	
	template:
	`
		<element-base :label="data.label" :details="data.details">
			<span v-html="data.value"></span>
		</element-base>
	`,

	components: {"element-base": ElementBase},
	
	props:
	{
		data: Object	// The data for this element
	},
	
	methods:
	{
		/**
		 * A label for an ancestor Generator somewhere
		 * @return	{string}	A label for an ancestor
		 */
		getGeneratorLabel: function()
		{
			return this.data.value;
		},
		
		/**
		 * Checks if this element has a valid value
		 * @return	{Boolean}	Always true, since output elements should always be valid
		 */
		validate: function()
		{
			return true;
		}
	}
};