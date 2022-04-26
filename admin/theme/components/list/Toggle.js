import CheckboxCheckedSvg from "../svgs/CheckboxCheckedSvg.js";
import CheckboxUncheckedSvg from "../svgs/CheckboxUncheckedSvg.js";
import LoadingSvg from "../svgs/LoadingSvg.js";

/**
 * Handles toggling a specific property on and off
 */
export default
{
	name: "toggle",
	
	template:
	`
		<button type="button" class="toggle-button" :class="{loading: loading}" @click="toggle">
			<template v-if="loading">
				<loading-svg />
			</template>
			<template v-else-if="!selected">
				<checkbox-unchecked-svg />
			</template>
			<template v-else>
				<checkbox-checked-svg />
			</template>
		</button>
	`,
	
	components:
	{
		"checkbox-checked-svg": CheckboxCheckedSvg,
		"checkbox-unchecked-svg": CheckboxUncheckedSvg,
		"loading-svg": LoadingSvg
	},

	props:
	{
		className: String,	// The name of the class to update
		id: Number,			// The id for the object to update
		property: String,	// The name of the property to update
		selected: Boolean	// Whether the toggle is currently on or off
	},

	data: function()
	{
		return {loading: false}
	},

	methods:
	{
		/**
		 * Triggers the toggle event, sending a message to the server
		 * @return	{Promise<void>}		When the toggle has finished communicating
		 */
		toggle: async function()
		{
			if(this.loading)
			{
				return;
			}

			this.loading = true;

			let response = await window.fetch(`/admin/action/switch/${this.className}/${this.id}/${this.property}/`);
			let json = await response.json();
			
			this.$emit("toggle", json.selected);
			this.loading = false;
		}
	}
}