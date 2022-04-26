import GroupElement, {findGeneratorLabelForElements, setGridImageForElements, validateChildren} from "../core/GroupElement.js";
import Tab from "./Tab.js";

/**
 * A group of tab elements
 */
export default
{
	extends: GroupElement,
	name: "tab-group",

	template:
	`
		<div class="tab-group">
			<div class="tab-headings">
				<a class="tab-heading" href="#" :class="{active: tab.name === currentTab}" v-for="tab in data.children" :key="tab.name" @click.prevent="setTab(tab)">{{ tab.heading }}</a>
			</div>
			<div class="tabs">
				<tab :data="tab" :values="values[data.name]" v-for="tab in data.children" :key="tab.name" v-show="tab.name === currentTab" :disabled="disabled" @selected="setTab(tab)" ref="tab" />
			</div>
		</div>
	`,

	components: {"tab": Tab},

	data: function()
	{
		// Either the item in the URL, or the first item in the group
		let currentTab = this.$route.query[this.data.name] || this.data.children[0].name;

		return {
			"currentTab": currentTab
		};
	},

	methods:
	{
		/**
		 * This updates the URL to match the selected tab
		 * @param	{object}	tab		The tab that was selected
		 */
		setTab: function(tab)
		{
			this.currentTab = tab.name;

			let query = {};
			Object.assign(query, this.$route.query);
			query[this.data.name] = tab.name;

			if(JSON.stringify(this.$route.query) !== JSON.stringify(query))
			{
				this.$router.replace({query: query});
			}
		},
		
		/**
		 * Finds a descendant a label to pass to an ancestor Generator
		 * @param	{string}								name	The name of the label element to search for
		 * @return	{HTMLCanvasElement|string|undefined}			Either the label (sometimes an image), or undefined if one can't be found
		 */
		findGeneratorLabel: function(name)
		{
			let elements = this.$refs.tab;

			return findGeneratorLabelForElements.call(this, elements, name);
		},
		
		/**
		 * Passes a single bulk uploaded file to child elements
		 * @param	{File}	data	The file that was uploaded
		 */
		updateImages: function(data)
		{
			let elements = this.$refs.tab;
			
			setGridImageForElements(elements, data);
		},
		
		/**
		 * Gets the label for this element for an ancestor Generator element
		 * @return	{undefined}		A tab group cannot act as a label element
		 */
		getGeneratorLabel: function()
		{
			return undefined;
		},
		
		/**
		 * Checks that all child tabs are valid
		 * @return	{boolean}	Whether all child tabs are valid
		 */
		validate: function()
		{
			let elements = this.$refs.tab;
			
			return validateChildren(elements);
		}
	}
};