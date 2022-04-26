import FormElement from "../core/FormElement.js";
import GroupElement, {findGeneratorLabelForElements} from "../core/GroupElement.js";
import {validateChildren} from "../core/GroupElement.js";

/**
 * A single LinkTo/LinkFrom type Generator element
 */
export default
{
	extends: GroupElement,
	name: "generator",

	template:
	`
		<section class="group">
			<h2 v-if="data.heading" class="generator-group-heading">{{ data.heading }}</h2>
			<form-element :data="element" :values="values[data.name]" v-for="element in data.elements" :key="element.name" :disabled="disabled" ref="element" />
		</section>
	`,

	components: {"form-element": async() => FormElement},
	
	methods:
	{
		/**
		 * Searches child elements for a label to apply to an ancestor Generator
		 * @param	{string}					name	The name of the element to look for
		 * @return	{string|HTMLCanvasElement}			The label to apply
		 */
		findGeneratorLabel: function(name)
		{
			let elements = this.$refs.element;
			
			return findGeneratorLabelForElements.call(this, elements, name);
		},
		
		/**
		 * Checks that all child elements are valid
		 * @return	{boolean}	Whether all child elements are valid
		 */
		validate: function()
		{
			let elements = this.$refs.element;
			
			return validateChildren(elements);
		}
	}
};