import ElementBase from "../core/ElementBase.js";
import RadioIndicator from "./RadioIndicator.js";
import ValueElement, {validateRequiredText} from "../core/ValueElement.js";
import {flattenOptionsArray} from "../core/GroupElement.js";

/**
 * A list of radio buttons
 */
export default
{
	extends: ValueElement,
	name: "radio",

	template:
	`
		<element-base :wrap-label="false" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<label class="option" v-for="option in allOptions" :key="option.unique" ref="label">
				<strong v-if="option.value === undefined">{{ getDashes(option.level) }} {{ option.label }}</strong>
				<template v-else>
					{{ getDashes(option.level) }} <input type="radio" v-model="values[data.name]" :value="option.value" :disabled="option.disabled" @change="validate" /> <radio-indicator /> <span class="option-label">{{ option.label }}</span>
				</template>
			</label>
		</element-base>
	`,

	components:
	{
		"element-base": ElementBase,
		"radio-indicator": RadioIndicator
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
		 * Has the browser focus on the first radio button
		 */
		focus: function()
		{
			this.$refs.label[0].focus();
		},
		
		/**
		 * Gets the label for the selected radio button
		 * @return	{string|undefined}	The label, or undefined if no radio button has been selected
		 */
		getGeneratorLabel: function()
		{
			for(let option of this.data.options)
			{
				if(option.value === this.values[this.data.name])
				{
					return option.label;
				}
			}

			return undefined;
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
		required: validateRequiredText
	}
};