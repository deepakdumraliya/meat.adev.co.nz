import CheckboxIndicator from "./CheckboxIndicator.js";
import ElementBase from "../core/ElementBase.js";
import ValueElement from "../core/ValueElement.js";
import {flattenOptionsArray} from "../core/GroupElement.js";

/**
 * Displays a list of checkboxes for the user to choose between
 */
export default
{
	extends: ValueElement,
	name: "checkboxes",

	template:
	`
		<element-base :wrap-label="false" :label="data.label" :info="data.info" :details="data.details" :error="error">
			<label class="option" v-for="option in allOptions" :key="option.unique" ref="label">
				<strong v-if="option.value === undefined">{{ getDashes(option.level) }} {{ option.label }}</strong>
				<template v-else>
					{{ getDashes(option.level) }} <input type="checkbox" v-model="values[data.name]" :value="option.value" :disabled="option.disabled" @change="validate" /> <checkbox-indicator /> <span class="option-label">{{ option.label }}</span>
				</template>
			</label>
		</element-base>
	`,

	components:
	{
		"checkbox-indicator": CheckboxIndicator,
		"element-base": ElementBase
	},
	
	computed:
	{
		allOptions: function()
		{
			return flattenOptionsArray(this.data.options);
		}
	},

	methods:
	{
		/**
		 * Gets a label for an ancestor element somewhere
		 * @return	{string|undefined}	Either all the labels for the currently selected items, or undefined if none are selected
		 */
		getGeneratorLabel: function()
		{
			let labels = [];

			for(let option of this.data.options)
			{
				if(this.values[this.data.name].indexOf(option.value) > -1)
				{
					labels.push(option.label);
				}
			}

			if(labels.length > 0)
			{
				return labels.join(", ");
			}
			else
			{
				return undefined;
			}
		},
		
		/**
		 * Focuses the browser on this element
		 */
		focus: function()
		{
			this.$refs.label[0].focus();
		},
		
		/**
		 * Gets the number of dashes to prepend to an option
		 */
		getDashes: function(level)
		{
			return "--".repeat(level);
		}
	},
	
	validations:
	{
		/**
		 * Checks whether one of these checkboxes are required
		 * @param	{boolean}		value	The currently selected checkboxes
		 * @return 	{string|null}			The error message, or null if it's valid
		 */
		required: function(value)
		{
			return value.length === 0 ? "This field is required" : null;
		}
	}
};