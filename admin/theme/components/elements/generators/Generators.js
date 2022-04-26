import AddSvg from "../../svgs/AddSvg.js";
import ChildGenerator from "./ChildGenerator.js";
import eventHub from "../../edit/eventHub.js";
import {uniqueId} from "../../../scripts/utility.js";
import {validateChildren} from "../core/GroupElement.js";

/**
 * A group of LinkFromMultiple/LinkManyMany type objects
 */
export default
{
	name: "generators",

	template:
	`
		<div class="generators">
			<h2 v-if="data.heading" class="generator-group-label">{{ data.heading }}</h2>
			<draggable :list="generators" tag="div" :disabled="!hasPosition()" handle="header" @sort="sort">
				<transition-group name="fade" tag="div" class="generator-list">
					<child-generator :data="generator" :values="internalValues" :is-draggable="hasPosition()" :generator-index="index" :singular="data.singular" v-for="(generator, index) in generators" :key="generator.temporaryId" :can-remove="data.absolute === null" :disabled="disabled" @toggleRemove="toggleRemove(index)" ref="generator" />
				</transition-group>
			</draggable>
			<button v-if="data.absolute === null && data.canAdd" type="button" class="button add-button" @click.prevent="addGenerator"><add-svg /> Add {{ data.label || data.singular }}</button>
		</div>
	`,

	props:
	{
		data: Object,		// Data for this element
		values: Object,		// Values for this and sibling elements
		disabled: Boolean	// Whether this element (and all child elements) are disabled
	},

	components:
	{
		"add-svg": AddSvg,
		"child-generator": ChildGenerator
	},

	data: function()
	{
		return {
			internalGenerators: this.data.generators.slice(0),
			internalValues: [],
			removedValues: [],
			openAbsolute: true
		}
	},

	computed:
	{
		/**
		 * Gets all child generators, sorted by position
		 * @return	{Object[]}	The child generators
		 */
		generators: function()
		{
			return this.internalGenerators.slice(0);
		},
	},

	created: function()
	{
		this.internalValues = this.values[this.data.name];

		if(this.data.absolute !== null)
		{
			while(this.internalGenerators.length < this.data.absolute)
			{
				let generator = this.addGenerator();
				generator.closed = !this.openAbsolute;
			}
		}
	},

	mounted: async function()
	{
		await Vue.nextTick();
		this.refreshValues();
		eventHub.$emit("component-mounted");
	},

	methods:
	{
		/**
		 * Triggered when the user drags and drops child generators
		 * @param	{DragEvent}		event	The event that triggered the drag and drop
		 */
		sort: function(event)
		{
			let oldIndex = event.oldDraggableIndex;
			let newIndex = event.newDraggableIndex;

			let generators = this.generators;
			generators[oldIndex].position = newIndex;
			generators[newIndex].position = oldIndex;

			// We're reordering the actual array, to prevent us from winding up with the wrong values in each element
			let values = this.internalValues.slice();
			let value = values[oldIndex];
			values.splice(oldIndex, 1);
			values.splice(newIndex, 0, value);
			this.$set(this, "internalValues", values);

			eventHub.$emit("sort-triggered");
			this.refreshValues();
		},

		/**
		 * Checks whether child generators can be reordered
		 * @return	{boolean}	Whether generators can be reordered
		 */
		hasPosition: function()
		{
			return this.internalGenerators[0] !== undefined && this.internalGenerators[0].position !== undefined;
		},

		/**
		 * Updates the global object with the values from the internal values array
		 */
		refreshValues: function()
		{
			let values = [];

			// We need to remove any objects that have been marked as "removed", so they don't get passed to the server
			for(let value of this.internalValues)
			{
				if(this.removedValues.indexOf(value) < 0)
				{
					values.push(value);
				}
			}

			this.$set(this.values, this.data.name, values);
		},

		/**
		 * Marks this object as "removed"
		 * @param	{Number}	index	The index for the object being marked as removed
		 */
		toggleRemove: function(index)
		{
			let value = this.internalValues[index];
			let removedIndex = this.removedValues.indexOf(value);

			if(removedIndex > -1)
			{
				this.removedValues.splice(removedIndex, 1);
			}
			else
			{
				this.removedValues.push(value);
			}

			this.refreshValues();
		},

		/**
		 * Adds a new child generator to the list
		 * @return	{Object}	The object that has just been added to the list of generators
		 */
		addGenerator: function()
		{
			let generators = this.generators;
			let position = generators.length > 0 ? generators[generators.length - 1].position + 1 : 0;

			// Generator object is double serialised, so we don't need to serialize/unserialize it to do a deep clone
			let generator = JSON.parse(this.data.new);
			generator.id = null;
			generator.temporaryId = uniqueId();
			generator.position = position;
			this.internalGenerators.push(generator);

			let value = JSON.parse(this.data.newValue);
			value.id = null;
			value.active = generator.active;
			value.position = generator.position;
			this.internalValues.push(value);

			Vue.nextTick(() => this.refreshValues());

			return generator;
		},

		/**
		 * Gets a label for an ancestor generator
		 * @return	{undefined}		We'll return undefined, because child labels don't belong to the parent class and may cause conflict
		 */
		getGeneratorLabel: function()
		{
			return undefined;
		},

		/**
		 * Checks that all child generators are valid
		 * @return	{boolean}	Whether all child generaotrs are valid
		 */
		validate: function()
		{
			let elements = this.$refs.generator;

			// If there are no child items at this point, the generator reference will not yet have been assigned
			if(elements === undefined)
			{
				return true;
			}

			// Filter out any elements that have been removed, it doesn't matter whether they're valid or not
			elements = elements.filter((element) =>
			{
				return !element.removed;
			});

			return validateChildren(elements);
		}
	}
}