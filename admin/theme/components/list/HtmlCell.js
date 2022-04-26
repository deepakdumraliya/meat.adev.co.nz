/**
 * A table cell containing arbitrary HTML
 */
export default
{
	name: "html-cell",
	
	template:
	`
		<span v-html="html"></span>
	`,

	props:
	{
		html: String	// The HTML to display in the cell
	}
};