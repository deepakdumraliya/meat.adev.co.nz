/**
 * The parent type for most elements that contain a value
 */
import eventHub from "../../edit/eventHub.js";

export default
{
	name: "value-element",
	
	props:
	{
		data: Object,		// The data for this element
		values: Object,		// Values for all sibling elements,
		disabled: Boolean	// Whether this element is currently disabled
	},
	
	data: function()
	{
		return {error: null};
	},
	
	mounted: function()
	{
		eventHub.$emit("component-mounted");
	},
	
	methods:
	{
		/**
		 * Checks if this element is valid
		 * @return	{boolean}	Whether this element is valid
		 */
		validate: function()
		{
			// Here we're iterating over the names of the validations applied server side, and if any match a validation in the validations object for this element, we pass the current value to that and see if it returns an error message.
			for(let validationName of this.data.validations)
			{
				if(this.$options.validations !== undefined && this.$options.validations[validationName] !== undefined)
				{
					let validationResult = this.$options.validations[validationName](this.values[this.data.name]);
					
					if(validationResult !== null)
					{
						this.error = validationResult;
						
						if(this.focus !== undefined)
						{
							this.focus();
						}
						
						return false;
					}
				}
			}
			
			this.error = null;
			
			return true;
		}
	}
}

/**
 * Checks that the value is not an empty string
 * @param	{string}		value	The value to check
 * @return	{string|null}			An error message, or null if it's not empty
 */
export let validateRequiredText = function(value)
{
	return value.trim() === "" ? "This field is required" : null;
};