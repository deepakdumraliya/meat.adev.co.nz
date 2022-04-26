import HtmlElement from "./HtmlElement.js";

/**
 * Displays a heading (h2) in the form
 */
export default
{
	extends: HtmlElement,
	name: "heading-element",
	
	template:
	`
		<h2 v-html="data.html" />
	`,
	
	methods:
	{
		/**
		 * Gets a label for an ancestor Generator somewhere
		 * @return	{string}	The contents of this element, stripped of all HTML
		 */
		getGeneratorLabel: function()
		{
			let div = document.createElement("h2");
			div.innerHTML = this.data.html;

			return div.textContent;
		}
	}
};