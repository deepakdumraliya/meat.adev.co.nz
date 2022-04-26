import List from "../list/List.js";

/**
 * A table element to display in the form
 */
export default
{
	name: "table-element",

	template:
	`
		<section class="table-element">
			<header class="content-header">
				<div class="title">
					<h2>
						{{ data.label }}
					</h2>
					<span v-html="data.actions" />
					<router-link class="button add-button" :to="addLink(classItem.name)" v-if="classItem.canAdd" v-for="classItem in data.list.classes" :key="classItem.name">Add {{ classItem.singular }}</router-link>
				</div>
				<input class="list-filter" type="search" placeholder="Filter by keyword" v-model="filter" />
			</header>
			<list :columns="data.list.columns" :rows="data.list.rows" :filter="filter" />
			<footer class="element-info" v-if="data.info">
				{{ data.info }}
			</footer>
			<div class="pagination" v-if="data.list.totalPages !== null">
				Page: <select @change="setPage($event.target.options[$event.target.selectedIndex].value)">
					<option v-for="i in data.list.totalPages" :value="i" :selected="i === page">{{ i }}</option>
				</select> of {{ data.list.totalPages }}
				<button type="button" class="button pagination-prev" :disabled="page <= 1" @click.prevent="setPage(page - 1)">Previous</button>
				<button class="button pagination-next" :disabled="page >= data.list.totalPages" @click.prevent="setPage(page + 1)">Next</button>
			</div>
		</section>
	`,

	components: {"list": List},

	props:
	{
		data: Object	// Data about this element
	},

	data: function()
	{
		return {filter: "", page: 1}
	},

	methods:
	{
		/**
		 * Checks if this element is valid
		 * @return	{boolean}	True, since Table elements should always be valid
		 */
		validate: function()
		{
			return true;
		},

		/**
		 * The link to add a new item
		 * @param	{string}	name	The name of the class
		 * @return	{string}			The link to the item create form
		 */
		addLink: function(name)
		{
			return `/admin/${name}/new/${this.data.id}`;
		},

		/**
		 * Sets the page to a different page
		 * @param	{number}	page	The page to visit
		 */
		setPage: async function(page)
		{
			this.page = page;
			let current = this.$route.path;

			// Remove any trailing slashes
			let normalised = current.replace(/\/$/, "");

			let response = await window.fetch(normalised + '/element/' + this.data.name + '/?page=' + page);
			let json = await response.json();
			Object.assign(this.data, json.data);
		},
	}
};