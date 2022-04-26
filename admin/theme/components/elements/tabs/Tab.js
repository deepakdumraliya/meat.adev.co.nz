import FormElement from "../core/FormElement.js";
import GroupElement, {findGeneratorLabelForElements, setGridImageForElements, validateChildren} from "../core/GroupElement.js";

/**
 * A single tab in a tab group
 */
export default
{
	extends: GroupElement,
	name: "tab",

	template:
	`
		<div class="tab">
			<form-element :data="child" :values="values[data.name]" v-for="child in data.children" :key="child.name" :disabled="disabled" ref="child" />
		</div>
	`,

	components: {"form-element": async() => FormElement},
	
	methods:
	{
		/**
		 * Searches child elements for a label for an ancestor generator
		 * @param	{string}			name	The name of the element to search for
		 * @return	{string|undefined}			The label for the ancestor
		 */
		findGeneratorLabel: function(name)
		{
			let elements = this.$refs.child;

			return findGeneratorLabelForElements.call(this, elements, name);
		},
		
		/**
		 * Passes bulk uploaded image data down to the receiving image element
		 * @param	{File}	data	the bulk uploaded images
		 */
		updateImages: function(data)
		{
			let elements = this.$refs.child;
			
			setGridImageForElements(elements, data);
		},
		
		/**
		 * A tab cannot be a label element, returns undefined
		 * @return	{undefined}		Undefined!
		 */
		getGeneratorLabel: function()
		{
			return undefined;
		},
		
		/**
		 * Checks that all child elements are valid
		 * @return	{boolean}	Whether all elements are valid
		 */
		validate: function()
		{
			let elements = this.$refs.child;
			let valid = validateChildren(elements);
			
			if(!valid)
			{
				this.$emit("selected");

				Vue.nextTick(function()
				{
					// Validate again, in order to allow focus events to fire properly
					validateChildren(elements);
				});
			}
			
			return valid;
		}
	}
};