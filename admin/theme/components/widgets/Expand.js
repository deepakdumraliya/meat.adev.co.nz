import ExpandSvg from "../svgs/ExpandSvg.js";

/**
 * A widget representing the expand button
 */
export default
{
	name: "expand",
	
	template:
	`
		<button type="button" class="expand-button" :class="{open: open}" @click.prevent="$emit('click')">
			<expand-svg />
		</button>
	`,
	
	components:
	{
		"expand-svg": ExpandSvg
	},

	props:
	{
		open: Boolean	// Whether this should be indicating open or not
	}
};