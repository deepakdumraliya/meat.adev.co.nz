import CheckboxIndicator from "../checkboxes/CheckboxIndicator.js";
import Expand from "../../widgets/Expand.js";
import FormElement from "../core/FormElement.js";
import Position from "../../widgets/Position.js";
import Remove from "../../widgets/Remove.js";
import eventHub from "../../edit/eventHub.js";
import {findGeneratorLabelForElements, searchValues, validateChildren} from "../core/GroupElement.js";
import {generateRedirectFunction, generateRedirectProxy} from "../../../scripts/utility.js";

/**
 * A single child of a multi generator element
 */
export default
{
	name: "child-generator",

	template:
	`
		<section class="generator" :class="{removed: removed}">
			<header :class="{draggable: isDraggable}" :key="timestamp">
				<h2>
					<expand :open="open" @click="open = !open" />
					<span class="singular">{{ singular }}</span> - <span class="label" v-if="ready">{{ getLabel() }}</span>
				</h2>
				<span class="controls">
					<label v-if="(values[generatorIndex] && values[generatorIndex].active) !== undefined" class="element checkbox-element">Active: <input type="checkbox" v-model="values[generatorIndex].active" /><checkbox-indicator /></label>
					<label v-if="canRemove && data.canRemove" class="to-remove"><span v-if="removed">Marked for deletion (cancel)</span> <remove @remove="toggleRemove()" v-if="ready" /></label>
					<position class="drag-indicator" v-if="isDraggable" />
				</span>
			</header>
			<transition name="fade">
				<div class="fields" v-show="open">
					<form-element :data="element" :values="values[generatorIndex]" v-for="element in data.elements" :key="element.name" :disabled="disabled || removed" ref="element" />
				</div>
			</transition>
		</section>
	`,

	props:
	{
		data: Object,				// Data for this element
		values: Array,				// Value data for this element and its siblings
		isDraggable: Boolean,		// Whether this element can be dragged for sorting
		generatorIndex: Number,		// This element's index in the array of generators
		singular: String,			// A label for a single instance of this item
		disabled: Boolean,			// Whether this element is disabled
		closed: Boolean,			// Whether this element is closed
		canRemove: Boolean			// Whether this item can be deleted
	},

	components:
	{
		"checkbox-indicator": CheckboxIndicator,
		"expand": Expand,
		"form-element": async() => FormElement,
		"position": Position,
		"remove": Remove
	},

	data: function()
	{
		return {
			open: this.data.id === null && !this.data.closed,
			evaluatedLabelFunction: undefined,
			ready: false,
			removed: false,
			timestamp: 0,
			dynamicLabelFunction: generateRedirectFunction(this.data.dynamicLabel)
		}
	},

	mounted: async function()
	{
		await Vue.nextTick();
		this.ready = true;
		eventHub.$emit("component-mounted");
		eventHub.$on("component-mounted", this.triggerReset);
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
			return searchValues(this.values[this.generatorIndex], name);
		},

		/**
		 * Used to force Vue to update the template, when we're waiting for a value in a nested element
		 */
		triggerReset: function()
		{
			this.timestamp = (new Date()).getTime();
		},

		/**
		 * Gets the label provided by a descendant element
		 * @return	{String|null|undefined|HTMLCanvasElement}			The label for this generator (very occasionally an image, for use in grid elements)
		 */
		getLabelFromDescendants: function()
		{
			let elements = this.$refs.element;

			if(elements === undefined)
			{
				// No point in continuing if the children haven't mounted yet
				return undefined;
			}

			let proxy = generateRedirectProxy((propertyName) => findGeneratorLabelForElements(elements, propertyName));
			return this.dynamicLabelFunction.call(this, proxy);
		},

		/**
		 * Gets the label to use for this Generator
		 * @return	{String|HTMLCanvasElement}			The label for this generator (very occasionally an image, for use in grid elements)
		 */
		getLabel: function()
		{
			let label = this.getLabelFromDescendants();

			// Default to "Untitled" if label is empty
			if(label === undefined || label === null || label === "")
			{
				return "Untitled";
			}

			return label;
		},

		/**
		 * Marks this element as removed and passes the event to the parent
		 */
		toggleRemove: function()
		{
			this.removed = !this.removed;
			this.$emit("toggleRemove");
		},

		/**
		 * Checks that this element, and all child elements are valid
		 * @return	{boolean}	Whether this element and all child elements are valid
		 */
		validate: function()
		{
			let elements = this.$refs.element;
			let valid = validateChildren(elements);

			// If this item is invalid, we want it to be open so we can have the browser focus on the invalid elements
			if(valid === false)
			{
				this.open = true;

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