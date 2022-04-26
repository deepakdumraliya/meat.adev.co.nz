import Copy from "./Copy.js";
import Edit from "./Edit.js";
import Expand from "../widgets/Expand.js";
import HtmlCell from "./HtmlCell.js";
import List from "./List.js";
import Position from "../widgets/Position.js";
import Remove from "../widgets/Remove.js";
import Toggle from "./Toggle.js";
import InputNumber from "./InputNumber.js";

/**
 * A single row that's being displayed in the list
 */
export default
{
	name: "row",

	template:
	`
		<tbody>
			<tr>
				<td class="expand" v-if="hasExpand">
					<expand v-if="row.children !== undefined" :open="open" @click="open = !open" />
				</td>
				<td v-for="(cell, index) in row.cells" :class="[cell.alignment, cell.widgetType]" :data-column="columns[index].heading">
					<div><!-- wrapper div for styling responsive -->
						<component :is="cell.widgetType" v-bind="cell.props" @remove="$emit('remove', row)" @toggle="cell.props.selected = $event">{{ cell.value }}</component>
						<span v-if="index === 0 && childCount > 0">- ({{ childCount }} {{ childCount === 1 ? row.subitemSingular.toLowerCase() : row.subitemPlural.toLowerCase() }})</span>
					</div>
				</td>
				<td class="position" v-if="hasOrdering">
					<position />
				</td>
			</tr>
			<transition name="fade">
				<tr class="sub-table" v-if="displaySubtable">
					<td :colspan="row.cells.length + (hasExpand ? 1 : 0) + (hasOrdering ? 1 : 0)" class="list-wrapper">
						<list :columns="row.children.columns" :rows="row.children.rows" :filter="filter" />
						<p v-if="canAdd(row.children.classes)">
							<router-link class="button add-button" :to="addLink(classItem.name)" v-for="classItem in row.children.classes" :key="classItem.name">Add {{ classItem.singular }}</router-link>
						</p>
					</td>
				</tr>
			</transition>
		</tbody>
	`,

	props:
	{
		row: Object,			// The row data to display
		hasExpand: Boolean,		// Whether any sibling rows can expand
		hasOrdering: Boolean,	// Whether any sibling rows have ordering
		filter: String,			// The current filter to pass around
		columns: Array			// The array of columns for the table we're currently in
	},

	// Note: Some of these components are assigned to columns by the server, so don't assume they're unused just because they're not used in the template
	components:
	{
		"html-cell": HtmlCell,
		"copy": Copy,		 
		"edit": Edit,
		"expand": Expand,
		"list": async() => List,
		"remove": Remove,
		"position": Position,
		"toggle": Toggle,
		"input-number": InputNumber
	},

	data: function()
	{
		return {
			open: false
		}
	},

	computed:
	{
		/**
		 * Counts how many child rows there are
		 * @return	{number}	The number of child rows
		 */
		childCount: function()
		{
			if(this.row.children === undefined)
			{
				return 0;
			}

			return (this.row.children.rows || []).length;
		},

		/**
		 * Whether to display the subtable
		 * @return	{boolean}	Whether to display the subtable
		 */
		displaySubtable: function()
		{
			if(this.row.children === undefined)
			{
				return false;
			}

			if(this.open)
			{
				return true;
			}

			return this.filter !== "" && this.row.children.rows.length > 0;
		}
	},

	methods:
	{
		/**
		 * Whether there are any add buttons
		 * @param	{object}	classes		The classes to check
		 */
		canAdd: function(classes)
		{
			for(let classItem of classes)
			{
				if(classItem.canAdd)
				{
					return true;
				}
			}

			return false;
		},

		/**
		 * The link to add a new item
		 * @param	{string}	name	The name of the class
		 * @return	{string}			The link to the item create form
		 */
		addLink: function(name)
		{
			return `/admin/${name}/new/${this.row.id}`;
		}
	},
};