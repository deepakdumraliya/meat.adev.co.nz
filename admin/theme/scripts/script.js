import FormPage from "../components/edit/FormPage.js";
import ListPage from "../components/list/ListPage.js";
import LoginForm from "../components/widgets/LoginForm.js";

const router = new VueRouter(
{
	mode: "history",
	
	routes: [
	{
		path: '/admin/:class/new/:parentId?/',
		component: FormPage,
		props: {type: "create"}
	},

	{
		path: '/admin/:class/:page?/',
		component: ListPage,
	},
	
	{
		path: '/admin/:class/edit/:id/',
		component: FormPage,
		props: {type: "edit"}
	}]
});

new Vue(
{
	el: ".js-vue-wrapper",
	router: router,
	
	components:
	{
		"login-form": LoginForm,
	},

	data:
	{
		navId: undefined,
		navOpen: false,
		openSubnav: null
	},

	watch:
	{
		"$route": function()
		{
			this.navOpen = false;
		},

		navOpen: function(newValue)
		{
			if(!newValue)
			{
				this.openSubnav = null;
			}
		}
	},
	
	methods:
	{
		activeItem: function(routes, navIds)
		{
			if(navIds.indexOf(this.navId) > -1)
			{
				return true;
			}
			
			for(let route of routes)
			{
				if(this.$route.path.startsWith(route))
				{
					return true;
				}
			}
			
			return false;
		},

		toggleSubnav: function(link)
		{
			if(this.openSubnav === link)
			{
				this.openSubnav = null;
			}
			else
			{
				this.openSubnav = link;
			}
		},
		
		changeNavId(navId)
		{
			this.navId = navId;
		}
	}
});