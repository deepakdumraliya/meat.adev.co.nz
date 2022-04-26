/**
 * Displays arbitrary HTML in the form
 */
export default
{
	name: "html-element",
	
	template:
	`
		<div v-html="data.html" />
	`,

	props:
	{
		data: Object	// Data about this element
	},
	
	methods:
	{
		/**
		 * Gets a label for an ancestor Generator somewhere
		 * @return	{string}	The contents of this element, stripped of all HTML
		 */
		getGeneratorLabel: function()
		{
			let div = document.createElement("div");
			div.innerHTML = this.data.html;

			return div.textContent;
		},
		
		/**
		 * Checks if this element has a valid value
		 * @return	{Boolean}	Always true, since HTML elements should always be valid
		 */
		validate: function()
		{
			return true;
		}
	}
};