import RadioCheckedSvg from "../../svgs/RadioCheckedSvg.js";
import RadioUncheckedSvg from "../../svgs/RadioUncheckedSvg.js";

/**
 * Handles displaying an icon indicating checked/unchecked status for a radio button
 */
export default
{
	name: "radio-indicator",
	
	template:
	`
		<span class="indicator">
			<span class="unchecked">
				<radio-unchecked-svg />
			</span>
			<span class="checked">
				<radio-checked-svg />
			</span>
		</span>
	`,
	
	components:
	{
		"radio-checked-svg": RadioCheckedSvg,
		"radio-unchecked-svg": RadioUncheckedSvg
	}
};