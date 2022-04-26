import ElementBase from "./core/ElementBase.js";
import ValueElement, {validateRequiredText} from "./core/ValueElement.js";
import {flattenOptionsArray} from "./core/GroupElement.js";

/**
 * Displays a select box in the form
 */
export default
{
	extends: ValueElement,
	name: "select-element",

	template:
	`
		<element-base class="select-element" :wrap-label="false" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<select v-model="values[data.name]" :disabled="disabled" ref="select" @change="validate">
				<template v-for="option in allOptions">
					<optgroup v-if="option.value === undefined && option.level === undefined" :label="option.label" :key="option.unique">
						<option v-for="childOption in getFlattenedChildren(option)" :value="childOption.value" :disabled="childOption.disabled || childOption.value === undefined">{{ getDashes(childOption.level) }} {{ childOption.label }}</option>
					</optgroup>
					<option v-else :value="option.value" :disabled="option.disabled || option.value === undefined" :key="option.unique">{{ getDashes(option.level) }} {{ option.label }}</option>
				</template>
			</select>
		</element-base>
	`,

	components: {"element-base": ElementBase},

	computed:
	{
		allOptions: function()
		{
			let options = [];
			
			for(let option of this.data.options)
			{
				options.push(option);
				
				if(option.value !== undefined)
				{
					options = options.concat(flattenOptionsArray(option.children, 1));
				}
			}
			
			return options;
		}
	},
	
	methods:
	{
		/**
		 * Focuses the browser on this element
		 */
		focus: function()
		{
			this.$refs.select.focus();
		},
		
		/**
		 * Searches the array of options for the selected value
		 * @param	{Object[]}			options		The options to search through
		 * @return	{string|undefined}				The label matching the currently selected option, or undefined if one can't be found
		 */
		getLabelFromOptions: function(options)
		{
			for(let option of options)
			{
				if(option.value === this.values[this.data.name])
				{
					return option.label;
				}
				
				let childLabel = this.getLabelFromOptions(option.children);
				
				if(childLabel !== undefined)
				{
					return childLabel;
				}
			}
			
			return undefined;
		},
		
		/**
		 * Gets a label for an ancestor Generator FormElement somewhere
		 * @return	{string|undefined}	The label for the currently selected option, or undefined if there is no current option
		 */
		getGeneratorLabel: function()
		{
			return this.getLabelFromOptions(this.data.options);
		},
		
		/**
		 * Gets the flattened children of an option
		 * @param	{Object}	option	The object to get the flattened children for
		 * @return	{Object[]}			That option's flattened children
		 */
		getFlattenedChildren(option)
		{
			return flattenOptionsArray(option.children);
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