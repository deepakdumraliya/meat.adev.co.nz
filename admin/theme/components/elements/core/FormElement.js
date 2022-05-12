/**
 * A wrapper around the actual element component. Handles associating the component name with the actual JavaScript object
 */
import {generateRedirectFunction, generateRedirectProxy} from "../../../scripts/utility.js";

export default
{
	name: "form-element",
	
	template:
	`
		<transition name="fade">
			<component v-if="component !== undefined" :is="component" :class="data.classes" :data="data" :values="values" v-show="getConditional()" :disabled="disabled" ref="component" />
		</transition>
	`,
	
	props:
	{
		data: Object,				// Data about the element
		values: [Object, Array],	// Contains the value of all sibling elements, including this one
		disabled: Boolean			// Whether this element, and all child elements, are disabled
	},

	data: function()
	{
		return {
			conditionalFunction: generateRedirectFunction(this.data.conditional),
			component: undefined,
			pendingData: null
		}
	},
	
	created: async function()
	{
		let component = await import(this.data.component);
		this.component = component.default;
		
		if(this.pendingData !== null)
		{
			this.updateImages(this.pendingData);
			this.pendingData = null;
		}
	},

	methods:
	{
		/**
		 * Requests a value for an element from the parent element
		 * @param	{string}	name	The name of the element to request
		 * @return						The value of that element, or undefined if it can't be found
		 */
		searchForValue: function(name)
		{
			if(this.$parent.searchForValue !== undefined)
			{
				return this.$parent.searchForValue(name);
			}
			
			return undefined;
		},
		
		/**
		 * Gets the conditional value for displaying this element
		 * @return	{boolean}	The result of the conditional
		 */
		getConditional: function()
		{
			if(this.$parent.searchForValue === undefined)
			{
				return true;
			}
			
			let proxy = generateRedirectProxy((propertyName) => this.$parent.searchForValue(propertyName));
			
			try
			{
			    return this.conditionalFunction.call(this, proxy);
			}
			catch(e)
			{
			    return false;
			}
		},
		
		/**
		 * Gets the label for only this element, not child elements, if it has one
		 * @return	{string|undefined}	The label, or undefined if it wouldn't make any sense for this element to have a label
		 */
		getGeneratorLabel: function()
		{
			let component = this.$refs.component;
			
			if(component === undefined)
			{
				return undefined;
			}
			
			return component.getGeneratorLabel();
		},
		
		/**
		 * Searches child elements of this element for the label element
		 * @param	{string}			name	The name of the element to look for
		 * @return	{string|undefined}			The label, or undefined if no label element could be found
		 */
		findGeneratorLabel: function(name)
		{
			let component = this.$refs.component;
			
			if(component === undefined)
			{
				return undefined;
			}
			
			return component.findGeneratorLabel === undefined ? undefined : component.findGeneratorLabel(name);
		},
		
		/**
		 * Passes bulk uploaded image data to a child element, waits a single tick to make sure the child element is mounted
		 * @param	{File}	data	The uploaded file
		 */
		updateImages: function(data)
		{
			if(this.component === undefined)
			{
				this.pendingData = data;
			}
			else
			{
				Vue.nextTick().then(() =>
				{
					let component = this.$refs.component;
					
					if(component === undefined)
					{
						return;
					}
					
					if(component.updateImages !== undefined)
					{
						component.updateImages(data);
					}
				});
			}
		},
		
		/**
		 * Checks whether this element is valid
		 * @return	{boolean}	Whether the element is valid
		 */
		validate: function()
		{
			let component = this.$refs.component;
			
			if(component === undefined)
			{
				return undefined;
			}
			
			return component.validate();
		}
	}
};