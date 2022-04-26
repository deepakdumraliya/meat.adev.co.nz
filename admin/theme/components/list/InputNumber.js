import eventHub from "../edit/eventHub.js";

/**
 * Handles updating a specific numneric property directly from the list table
 */
let values = new Map();

export default
{
	name: "input-number",
	
	template:
	`
		<div class="update-field no-drag" :class="{loading: loading}">
			<template v-if="loading">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1536 1792"><path d="M1511 1056q0 5-1 7-64 268-268 434.5T764 1664q-146 0-282.5-55T238 1452l-129 129q-19 19-45 19t-45-19-19-45v-448q0-26 19-45t45-19h448q26 0 45 19t19 45-19 45l-137 137q71 66 161 102t187 36q134 0 250-65t186-179q11-17 53-117 8-23 30-23h192q13 0 22.5 9.5t9.5 22.5zm25-800v448q0 26-19 45t-45 19h-448q-26 0-45-19t-19-45 19-45l138-138Q969 384 768 384q-134 0-250 65T332 628q-11 17-53 117-8 23-30 23H50q-13 0-22.5-9.5T18 736v-7q65-268 270-434.5T768 128q146 0 284 55.5T1297 340l130-129q19-19 45-19t45 19 19 45z"/></svg>
			</template>
			<input v-else type="number" :value="internalValue" @change="updateValue($event.target.value)" />
			<div v-if="error != null" class="error">{{ error }}</div>
		</div>
	`,

	props:
	{
		className: String,	// The name of the class to update
		id: Number,			// The id for the object to update
		property: String,	// The name of the property to update
		value: Number		// The current value of the property
	},

	data: function()
	{
		return {
			loading: false,
			internalValue: values.get(`${this.className}/${this.id}/${this.property}`) || this.value,
			error: null
		}
	},

	methods:
	{
		updateValue: async function(newValue)
		{
			if(this.loading)
			{
				return;
			}
			
			this.loading = true;
			let formData = new FormData();
			newValue = Number(newValue);
			formData.append("value", newValue);
			let response = await window.fetch(`/admin/action/update-property/${this.className}/${this.id}/${this.property}/`, {method: 'POST', body: formData});
			let json = await response.json();
			
			if (!json.success)
			{
				this.error = json.error;
			}
			else 
			{
				this.internalValue = json.newValue;
				values.set(`${this.className}/${this.id}/${this.property}`, json.newValue);
				this.error = null;
			}
			this.loading = false;
			
		},
	}
}

eventHub.$on("listLoaded", () => values = new Map());