import Confirm from "./Confirm.js";
import RemoveSvg from "../svgs/RemoveSvg.js";

/**
 * A widget representing the remove button
 */
export default
{
	name: "remove",
	
	template:
	`
		<button type="button" class="remove-button" @click.prevent="remove">
			<remove-svg />
		</button>
	`,
	
	components:
	{
		"remove-svg": RemoveSvg
	},
	
	props:
	{
		type: String,		// A label for the type of thing being deleted, e.g: 'product'
		label: String,		// The name of the thing being deleted, e.g. '32cm Protractor"
		confirm: Boolean	// Whether the system should display a confirmation box when this button is clicked
	},

	methods:
	{
		/**
		 * Called when we click this button, triggers the confirm dialog if the confirm parameter is true
		 */
		remove: function()
		{
			if(this.confirm)
			{
				Confirm.show("Confirmation", `Are you sure you want to delete the ${this.type} "${this.label}"?`, {title: "Cancel"},
					{
						title: `Delete ${this.type}`,
						action: () => this.$emit("remove")
					}, true);
			}
			else
			{
				this.$emit("remove");
			}
		}
	}
}