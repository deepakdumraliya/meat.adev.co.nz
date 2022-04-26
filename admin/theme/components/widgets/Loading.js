import LoadingSvg from "../svgs/LoadingSvg.js";

/**
 * A widget representing the loading animation
 */
export default
{
	name: "loading",
	
	template:
	`
		<div class="loading-animation">
			<loading-svg />
		</div>
	`,
	
	components:
	{
		"loading-svg": LoadingSvg
	}
}