import PositionSvg from "../svgs/PositionSvg.js";

/**
 * A widget representing a position indicator (indicates the user can drag the row up and down)
 */
export default
{
	name: "position",
	
	template:
	`
		<position-svg />
	`,
	
	components:
	{
		"position-svg": PositionSvg
	}
};