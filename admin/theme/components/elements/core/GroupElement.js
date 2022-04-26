import eventHub from "../../edit/eventHub.js";

/**
 * A parent type for most group-type elements
 */
export default
{
	name: "group-element",
	
	props:
	{
		data: Object,		// Data about this element
		values: Object,		// Values for all sibling elements, including this one
		disabled: Boolean	// Whether this element, and all child elements, are disabled
	},
	
	mounted: function()
	{
		eventHub.$emit("component-mounted");
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
		}
	}
}

/**
 * Checks whether the children of a Group FormElement are valid
 * @param	{Object[]}	elements	The elements to check
 * @return	{boolean}				Whether those elements are valid
 */
export let validateChildren = function(elements)
{
	if(elements === undefined)
	{
		return true;
	}
	
	let valid = true;
	
	// Iterate backwards through our elements, so the last time focus is called, it's on the first element with an error
	for(let i = elements.length - 1; i >= 0; i -= 1)
	{
		let element = elements[i];
		
		if(!element.validate())
		{
			valid = false;
		}
	}
	
	return valid;
};

/**
 * Retrieves the label from a specific element
 * @param	{Object[]}			elements	The elements to search
 * @param	{string}			name		The name of the element to look for
 * @return	{string|undefined}				The label, or undefined if one can't be found
 */
export let findGeneratorLabelForElements = function(elements, name)
{
	let label = undefined;

	// Return undefined and try again later
	if(elements === undefined)
	{
		return label;
	}

	for(let element of elements)
	{
		if(element.data.name === name)
		{
			label = element.getGeneratorLabel();
			break;
		}
		else
		{
			let possibleLabel = element.findGeneratorLabel(name);

			if(possibleLabel !== undefined)
			{
				label = possibleLabel;
				break;
			}
		}
	}

	return label;
};

/**
 * Iterates over a group of elements, attempting to set the bulk uploaded grid image on each one
 * @param	{Object[]}	elements	The elements to iterate
 * @param	{File}		data		The uploaded file
 */
export let setGridImageForElements = function(elements, data)
{
	for(let element of elements)
	{
		Vue.nextTick().then(() => element.updateImages(data));
	}
};

/**
 * Recursively unpacks an array of option items so that child options are outputted directly following their parent option. We can then easily output it into option groups and select boxes and whatnot.
 * @param	{Object[]}	options		The array of options to flatten
 * @param	{Number}	level		The current level to record
 * @return	{Object[]}				The options, flattened
 */
export let flattenOptionsArray = function(options, level = 0)
{
	if(options === undefined)
	{
		return [];
	}
	
	let flattened = [];
	
	for(let option of options)
	{
		option.level = level;
		flattened.push(option);
		flattened = flattened.concat(flattenOptionsArray(option.children, level + 1));
	}
	
	return flattened;
};

/**
 * Searches for a specific value in an object
 * @param	{Object}	values	The values to search through
 * @param	{string}	name	The name of the value to search for
 * @return						The value, or undefined if it can't be found
 */
export let searchValues = function(values, name)
{
	for(let key in values)
	{
		if(values.hasOwnProperty(key))
		{
			let value = values[key];
			
			if(key === name)
			{
				return value;
			}
			else if(Array.isArray(value))
			{
				// Probably child generators, should be ignored
				return undefined;
			}
			else if(value !== null && typeof value === "object")
			{
				let possibleValue = searchValues(value, name);
				
				if(possibleValue !== undefined)
				{
					return possibleValue;
				}
			}
		}
	}
	
	return undefined;
};