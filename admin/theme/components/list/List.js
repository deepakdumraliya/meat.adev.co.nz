import Row from "./Row.js";

// This will retain the filtering results for the current filter, so we don't need to run it very often
let filterResults = new Map();

/**
 * Displays a list of items
 */
export default
{
	name: "list",
	
	template:
	`
		<draggable :list="rows.slice()" tag="table" :disabled="!hasOrdering" class="rows" @sort="sort" ref="table" filter=".no-drag" :prevent-on-filter="false">
			<template v-slot:header>
				<thead>
					<tr>
						<th class="expand" v-if="hasExpand"></th>
						<th class="heading" v-for="column in columns" v-html="column.heading" :class="column.alignment"></th>
						<th class="position" v-if="hasOrdering"></th>
					</tr>
				</thead>
			</template>
			<row :class="{draggable: hasOrdering}" :has-expand="hasExpand" :has-ordering="hasOrdering" :filter="filter" :columns="columns" v-for="row in rows" :key="row.class + ':' + row.id" :row="row" @remove="remove" v-show="filteredRows.indexOf(row) > -1" />
		</draggable>
	`,
	
	components: {"row": Row},
	
	props:
	{
		columns: Array,		// An array of columns that will be displayed in this list
		rows: Array,		// An array of rows that will be displayed in this list
		filter: String		// The current filter that is being applied to everything in this list
	},
	
	data: function()
	{
		return {
			filteredRows: this.rows.filter(this.filterFunction)
		};
	},
	
	watch:
	{
		rows: function(rows)
		{
			this.filteredRows = this.rows.filter(this.filterFunction);
		},
		
		filter: function()
		{
			filterResults = new Map();
			this.filteredRows = this.rows.filter(this.filterFunction)
		}
	},
	
	computed:
	{
		/**
		 * Checks whether this list supports drag and drop
		 * @return	{boolean}	Whether drag and drop is supported
		 */
		isOrdered: function()
		{
			return this.rows.length > 0 && this.rows[0].position !== undefined;
		},
		
		/**
		 * Checks whether we should currently apply ordering to this table
		 * @return	{boolean}	Whether to apply ordering
		 */
		hasOrdering: function()
		{
			return this.isOrdered && this.filter === ""
		},
		
		/**
		 * Checks whether any row in this table is expandable
		 * @return	{boolean}	Whether there are any expandable rows
		 */
		hasExpand: function()
		{
			for(let row of this.rows)
			{
				if(row.children !== undefined)
				{
					return true;
				}
			}
			
			return false;
		}
	},
	
	methods:
	{
		/**
		 * Called when we want to delete an item from the list
		 * @param	{Object}	removeRow	The row to delete
		 */
		remove: function(removeRow)
		{
			for(let i = 0; i < this.rows.length; i += 1)
			{
				let row = this.rows[i];
				
				if(row === removeRow)
				{
					this.rows.splice(i, 1);
					let ignored = window.fetch(`/admin/action/delete/${row.class}/${row.id}/`);
				}
			}
		},
		
		/**
		 * Triggered when drag and drop has finished, works out the new positions and sends the results to the server
		 * @param	{DragEvent}		event	The event that triggered the sorting
		 */
		sort: function(event)
		{
			let rows = this.rows;
			let oldIndex = event.oldDraggableIndex - 1;
			let newIndex = event.newDraggableIndex - 1;
			let row = rows[oldIndex];
			
			rows.splice(oldIndex, 1);
			rows.splice(newIndex, 0, row);
			
			let updates = [];
			
			for(let i = 0; i < rows.length; i += 1)
			{
				let position = i + 1;
				let row = rows[i];
				
				if(row.position !== position)
				{
					row.position = position;
					
					updates.push(
					{
						class: row.class,
						id: row.id,
						position: position
					});
				}
			}
			
			let formData = new FormData();
			formData.append("json", JSON.stringify(updates));
			
			let ignored = window.fetch("/admin/action/reorder/",
			{
				method: "post",
				body: formData
			});
		},
		
		/**
		 * Checks if a row should be visible or not
		 * @param	{Object}	row		The row to check
		 * @return	{Boolean}			Whether it should be filtered
		 */
		filterFunction: function(row)
		{
			if(this.filter === "")
			{
				return true;
			}
			
			let result = filterResults.get(row);
			
			// We've already run this calculation, so continue normally
			if(result !== undefined)
			{
				return result;
			}
			
			// Check child rows first, since if they match, we needn't worry about checking the parent cells
			if(row.children !== undefined)
			{
				for(let childRow of row.children.rows)
				{
					if(this.filterFunction(childRow))
					{
						result = true;
						break;
					}
				}
			}
			
			// None of the child cells match, so we'll want to check if each word is in at least one cell
			if(result === undefined)
			{
				let words = this.filter.trim().toLowerCase().split(" ");
				let rowContents = "";
				
				for(let cell of row.cells)
				{
					if(cell.widgetType === "html-cell" && cell.props.html !== undefined)
					{
						let element = document.createElement("div");
						element.innerHTML = cell.props.html;
						rowContents += "~" + element.innerText.toLowerCase();
					}
				}
				
				for(let word of words)
				{
					if(rowContents.indexOf(word) < 0)
					{
						result = false;
						break;
					}
				}
				
				if(result === undefined)
				{
					result = true;
				}
			}
			
			filterResults.set(row, result);
			
			return result;
		}
	}
}