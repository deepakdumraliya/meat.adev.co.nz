import FormElement from "../elements/core/FormElement.js";
import {searchValues, validateChildren} from "../elements/core/GroupElement.js";

/**
 * The entire Generator edit form
 */
export default
{
	name: "Form",
	
	template:
	`
		<form class="generator-form" novalidate="novalidate" @submit.prevent="validate(false)">
			<form-element :data="element" :values="values" v-for="element in elements" :key="element.name" ref="element" />
			<p class="actions">
				<label class="active-toggle" v-if="active !== undefined">
					<input type="checkbox" :checked="active" @change="$emit('activeToggled')" />
					<span class="toggle-label"></span>
				</label>
				<button class="button" type="submit">Save {{ singular }}</button>
				<button v-if="hasAdd" class="button" type="submit" @click.prevent="validate(true)">Save {{ singular }} and create another</button>
				<router-link class="cancel" :to="previousPageLink">Cancel</router-link>
			</p>
		</form>
	`,

	components: {"form-element": FormElement},
	
	props:
	{
		elements: Array,			// The top level elements in this form
		active: Boolean,			// Whether this object is active
		singular: String,			// The singular label for this type of object
		previousPageLink: String,	// The link to return to the list view
		hasAdd: Boolean,			// Whether we can create another of this type of object
		values: Object				// The values object where we'll keep track of the state of this form
	},

	methods:
	{
		/**
		 * Searches all child elements for a specific value
		 * @param	{string}	name	The name of the element to request
		 * @return						The value of that element, or undefined if it can't be found
		 */
		searchForValue: function(name)
		{
			return searchValues(this.values, name);
		},
		
		/**
		 * Validates all the elements in this form, triggering a submit even if everything is valid
		 * @param	addAnother	Whether the "add another" button was clicked
		 */
		validate: function(addAnother)
		{
			this.$refs.element[0].validate();

			let elements = this.$refs.element;
			
			if(validateChildren(elements))
			{
				this.$emit(addAnother ? "submitForAnother" : "submit");
			}
		}
	}
}