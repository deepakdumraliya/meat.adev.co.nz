import EditSvg from "../svgs/EditSvg.js";

/**
 * Represents the edit button
 */
export default
{
	name: "edit",
	
	template:
	`
		<router-link class="edit-button" :to="to">
			<edit-svg />
		</router-link>
	`,
	
	components:
	{
		"edit-svg": EditSvg
	},
	
	props:
	{
		to: String	// The page the edit button links to
	}
}