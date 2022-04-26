import BaseTemplate from "../BaseTemplate.js";
import List from "./List.js";

/**
 * The initial data to use in this component.
 * @return	{object}	The initial data
 */
let initialData = function()
{
	return {
		classes: [],
		navId: undefined,
		heading: "",
		beforeTable: "",
		afterTable: "",
		columns: [],
		rows: [],
		filter: "",
		loading: true,
		rawOutput: "",
		totalPages: null,
		filterable: false,
		message: '',
		exportable: []
	}
};

// The base page for lists of items
export default
{
	name: "list-page",

	template:
	`
		<base-template :loading="loading">
			<template v-slot:heading>
				{{ heading }}
			</template>
			<template v-slot:button>
				<router-link class="button add-button" :to="addLink(classItem.name)" v-if="classItem.canAdd" v-for="classItem in classes" :key="classItem.name">Add {{ classItem.singular }}</router-link>
			</template>
			<template v-slot:search>
				<div class="heading-right">
					<div class="export-buttons">
						<a v-for="format in exportable" class="button" :href="exportLink(format)">Export as {{ format }}</a>
					</div>
					<form class="filter-form" @submit.prevent="submitFilter">
						<input class="list-filter" type="search" placeholder="Filter by keyword" v-model="filter" />
						<button v-if="filterable" class="button" type="submit">Go</button>
					</form>
				</div>
			</template>
			<template v-slot:default>
				<div v-if="message !== ''" class="message">
					<div v-html="message"></div>
					<button class="button" @click="message = ''">Okay</button>
				</div>
				<div class="before-table" v-if="beforeTable !== ''" v-html="beforeTable"></div>
				<!-- Raw output is used to output raw HTML when an AJAX request returns HTML instead of the expected JSON -->
				<div class="raw-output" v-if="rawOutput !== ''" v-html="rawOutput"></div>
				<list :columns="columns" :rows="rows" :filter="computedFilter" v-else-if="rows.length > 0" />
				<p class="empty-list" v-else>
					There is nothing to display.
				</p>
				<div class="after-table" v-if="afterTable !== ''" v-html="afterTable"></div>
				<div class="pagination" v-if="totalPages !== null">
					Page: <select @change="setPage($event.target.options[$event.target.selectedIndex].value)">
						<option v-for="i in totalPages" :value="i" :selected="i === page">{{ i }}</option>
					</select> of {{ totalPages }}
					<button type="button" class="button pagination-prev" :disabled="page <= 1" @click="setPage(page - 1)">Previous</button>
					<button class="button pagination-next" :disabled="page >= totalPages" @click="setPage(page + 1)">Next</button>
				</div>
			</template>
		</base-template>
	`,

	components:
	{
		"base-template": BaseTemplate,
		"list": List
	},

	data: initialData,

	computed:
	{
		/**
		 * Gets our current page number
		 * @return	{number}	The current page number
		 */
		page: function()
		{
			return Number(this.$route.params.page) || 1;
		},

		computedFilter: function()
		{
			if(this.filterable)
			{
				return "";
			}

			return this.filter;
		}
	},

	created: function()
	{
		let ignored = this.fetchData();
	},

	watch:
	{
		// If we use the same sort of component, it won't be recreated, so we need to watch the route for changes
		"$route": function(newValue, oldValue)
		{
			if(newValue.path !== oldValue.path)
			{
				let ignored = this.fetchData();
			}
		},

		// We want to update the URL to match the query
		filter: function(value)
		{
			let ignored = this.$router.replace({query: {filter: value}});
		}
	},

	methods:
	{
		/**
		 * The link to add a new item
		 * @param	{string}	name	The name of the class
		 * @return	{string}			The link to the item create form
		 */
		addLink: function(name)
		{
			return `/admin/${name}/new/`;
		},

		exportLink: function(format)
		{
			return '/admin/action/export/' + this.$route.params.class + '/?filter=' + encodeURIComponent(this.filter) + '&amp;format=' + format;
		},

		/**
		 * Sets the page to a different page
		 * @param	{number}	page	The page to visit
		 */
		 setPage: function(page)
		 {
			 let queryString = this.$route.query;
			 let url = `/admin/${this.$route.params.class}/${page}`;
			 let ignored = this.$router.push({
				 path: url,
				 query: queryString
			 });
		 },

		submitFilter: function()
		{
			if(!this.filterable)
			{
				return;
			}

			let ignored = this.fetchData();
		},

		/**
		 * Retrieves a list of items from the server
		 */
		fetchData: async function()
		{
			this.loading = true;
			Object.assign(this, initialData());
			this.filter = this.$route.query.filter || "";

			let current = this.$route.path;

			// Remove any trailing slashes
			let normalised = current.replace(/\/$/, "");
			let url = normalised + "/json/" + window.location.search; //Just in case we're using a GET parameter for context switching

			let response = await window.fetch(url, {headers: {"X-Requested-With": "XMLHttpRequest"}});

			if(current !== this.$route.path)
			{
				// Just in case the user is switching between screens
				return;
			}

			let text = await response.text();

			try
			{
				let json = JSON.parse(text);
				Object.assign(this, json);
				this.rawOutput = "";
			}
			catch(ignored)
			{
				this.heading = "Error: Unexpected response from server";
				this.rawOutput = text;
			}

			this.$emit("change-nav-id", this.navId);
			this.loading = false;
		}
	}
}