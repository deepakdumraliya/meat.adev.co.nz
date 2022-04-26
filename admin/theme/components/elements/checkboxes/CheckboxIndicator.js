import CheckboxCheckedSvg from "../../svgs/CheckboxCheckedSvg.js";
import CheckboxUncheckedSvg from "../../svgs/CheckboxUncheckedSvg.js";

/**
 * A checkbox indicator, to replace the default HTML checkbox
 */
export default
{
	name: "checkbox-indicator",
	
	template:
	`
		<span class="indicator">
			<span class="unchecked">
				<checkbox-unchecked-svg />
			</span>
			<span class="checked">
				<checkbox-checked-svg />
			</span>
		</span>
	`,
	
	components:
	{
		"checkbox-checked-svg": CheckboxCheckedSvg,
		"checkbox-unchecked-svg": CheckboxUncheckedSvg
	}
};