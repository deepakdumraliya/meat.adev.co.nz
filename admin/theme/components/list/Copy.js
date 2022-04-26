import CopySvg from "../svgs/CopySvg.js";

/**
 * Represents the copy button
 */
export default
{
	name: "copy",
	
	template:
	`
		<a class="edit-button" :href="to">
			<copy-svg />
		</a>
	`,
	
	components:
	{
		"copy-svg": CopySvg
	},
	
	props:
	{
		to: String	// The page the button links to
	}
}