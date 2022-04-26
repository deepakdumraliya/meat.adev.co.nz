import FormElement from "./core/FormElement.js";
import GroupElement, {findGeneratorLabelForElements, setGridImageForElements, validateChildren} from "./core/GroupElement.js";

/**
 * A group of elements. May have its own classes.
 */
export default
{
	extends: GroupElement,
	name: "group",

	template:
	`
		<section class="group">
			<h2 v-if="data.heading">
				{{ data.heading }}
			</h2>
			<form-element :data="child" :values="values[data.name]" v-for="child in data.children" :key="child.name" :disabled="disabled" ref="child" />
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
			let elements = this.$refs.child;

			return findGeneratorLabelForElements.call(this, elements, name);
		},
		
		/**
		 * Passes bulk uploaded image data from a Grid FormElement down the chain
		 * @param	{File}	data	The file that has been uploaded
		 */
		updateImages: function(data)
		{
			let elements = this.$refs.child;
			
			setGridImageForElements(elements, data);
		},
		
		/**
		 * Returns undefined, since a group can't be a label element
		 * @return	{undefined}		Because
		 */
		getGeneratorLabel: function()
		{
			return undefined;
		},
		
		/**
		 * Validates all the child elements
		 * @return	{boolean}	Whether all child elements are valid
		 */
		validate: function()
		{
			let elements = this.$refs.child;
			
			return validateChildren(elements);
		}
	}
};