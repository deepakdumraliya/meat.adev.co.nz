import BaseTemplate from "../BaseTemplate.js";
import Confirm from "../widgets/Confirm.js";
import Form from "./Form.js";
import eventHub from "./eventHub.js";
import {convertCanvasToFile, uniqueId} from "../../scripts/utility.js";

const JPEG_QUALITY = 0.85;
let originalString = '{}';
let currentObject = {};

/**
 * The initial data to use in this component.
 * @return	{object}	The initial data
 */
let initialData = function()
{
	return {
		heading: "",
		class: "",
		navId: undefined,
		singular: "",
		id: null,
		elements: [],
		previousPageLink: "",
		previousPageDetails: null,
		hasAdd: false,
		active: undefined,
		loading: true,
		progress: undefined,
		maxProgress: undefined,
		values: {},
		errors: [],
		rawOutput: "",
		uploadLimit: 0,
		message: ''
	}
};

/**
 * This will be called if we try to navigate away from the page via Vue
 * @param	{Object}	to		The route we're navigating to
 * @param	{Object}	from	The route we're navigating from
 * @param	{function}	next	A function to call to which we pass whether to navigate or not
 */
let guardFunction = function(to, from, next)
{
	if(from.path === to.path)
	{
		next();
		return;
	}

	if(JSON.stringify(currentObject) !== originalString)
	{
		Confirm.show("Are you sure?", "You have unsaved changes on this page",
			{title: "Stay on this page", action: () => next(false)},
			{title: "Leave page", action: () => next()},
			true
		);
	}
	else
	{
		next();
	}
};

/**
 * This will be called if we try to navigate away from the page using a normal link, or close the tab
 * @param	{Event}				event	The unload event
 * @return	{string|undefined}			A possible error message that will never be displayed
 */
let unloadFunction = function(event)
{
	if(JSON.stringify(currentObject) !== originalString)
	{
		event.preventDefault();
		event.returnValue =  "You have unsaved changes"; // Modern browsers don't actually display this message
	}
};

/**
 * The base page for lists of items
 */
export default
{
	name: "FormPage",

	template:
	`
		<base-template :loading="loading" :progress="progress" :max-progress="maxProgress">
			<template v-slot:breadcrumbs v-if="previousPageDetails !== null">
				<ul class="breadcrumbs">
					<li v-for="breadcrumb in breadcrumbs" :key="breadcrumb.identifier" >
						<router-link :to="breadcrumb.link">{{ breadcrumb.label }}</router-link>
					</li>
					<li>
						<span>{{ heading }}</span>
					</li>
				</ul>
			</template>
			<template v-slot:heading>
				{{ heading }}
			</template>
			<template v-slot:default>
				<ul class="errors" v-if="errors.length > 0">
					<li v-for="error in errors">
						{{ error }}
					</li>
				</ul>
				<div v-if="message !== ''" class="message">
					<div v-html="message"></div>
					<button class="button" @click="message = ''">Okay</button>
				</div>
				<!-- Raw output is used to output raw HTML when an AJAX request returns HTML instead of the expected JSON -->
				<div class="raw-output" v-if="rawOutput !== ''" v-html="rawOutput"></div>
				<wep-form v-if="elements.length > 0" :elements="elements" :values="values" :active="active" :type="type" :singular="singular" :previous-page-link="previousPageLink" :has-add="hasAdd" @activeToggled="active = !active" @submit="submitForm(false)" @submitForAnother="submitForm(true)" />
				<!--<div>
					{{ getJson(values) }}
				</div>-->
			</template>
		</base-template>
	`,

	components:
	{
		"base-template": BaseTemplate,
		"wep-form": Form
	},

	props:
	{
		type: String	// "edit" or "create" depending
	},

	data: initialData,

	computed:
	{
		breadcrumbs: function()
		{
			let links = [];
			let previous = this.previousPageDetails;

			while(previous !== null)
			{
				links.unshift(previous);
				previous = previous.previous;
			}

			return links;
		}
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
		}
	},

	created: function()
	{
		let ignored = this.fetchData();
		this.setOriginal();
	},

	beforeRouteUpdate: guardFunction,
	beforeRouteLeave: guardFunction,
	mounted: () => window.addEventListener("beforeunload", unloadFunction),
	unmounted: () => window.removeEventListener("beforeunload", unloadFunction),

	methods:
	{
		/**
		 * Retrieves a list of items from the server
		 */
		fetchData: async function()
		{
			this.loading = true;
			Object.assign(this, initialData());

			let current = this.$route.path;

			// Remove any trailing slashes
			let normalised = current.replace(/\/$/, "");
			let url = normalised + "/json/" + window.location.search;

			let response = await window.fetch(url, {headers: {"X-Requested-With": "XMLHttpRequest"}});
			let output = await response.text();

			try
			{
				let json = JSON.parse(output);
				Object.assign(this, json);
			}
			catch(ignored)
			{
				this.heading = "Error: Unexpected response from server";
				this.rawOutput = output;
			}

			this.$emit("change-nav-id", this.navId);
			this.loading = false;

			await Vue.nextTick();
			this.setOriginal();
		},

		/**
		 * Converts the values object into JSON
		 * @param	{Object}	values	The values to process
		 * @return	string				The JSON representation
		 */
		getJson: function(values)
		{
			return JSON.stringify(values);
		},

		/**
		 * Processes the values object, extracting the files into their own object
		 * @param	{Object}	values	The values to process
		 * @return	{Object[]}			The processed object and the files object
		 */
		processValues: async function(values)
		{
			let filesObject = {};
			let updatedValues = {};

			for(let key in values)
			{
				if(values.hasOwnProperty(key))
				{
					let value = values[key];

					if(value instanceof HTMLCanvasElement)
					{
						value = await convertCanvasToFile(value, JPEG_QUALITY);
					}

					if(value instanceof File)
					{
						let uploads = [];

						// File size is too big, we'll split the file up into smaller chunks and upload them to the server
						if(value.size > this.uploadLimit)
						{
							for(let i = 0; i < value.size; i += this.uploadLimit)
							{
								let identifier = uniqueId();
								let chunk = value.slice(i, i + this.uploadLimit);
								let file = new File([chunk], value.name, {type: value.type, lastModified: value.lastModified});
								uploads.push(identifier);
								filesObject[identifier] = file;
							}
						}
						else
						{
							let identifier = uniqueId();
							uploads = [identifier];
							filesObject[identifier] = value;
						}

						updatedValues[key] = uploads;
					}
					else if(value instanceof Array)
					{
						// Because this function processes an object, it's simpler to convert an array to an object with the stringified indices as the keys
						let temporaryObject = {};

						for(let i = 0; i < value.length; i += 1)
						{
							temporaryObject[String(i)] = value[i];
						}

						let childValues = await this.processValues(value);
						Object.assign(filesObject, childValues[1]);

						updatedValues[key] = [];

						for(let i = 0; i < value.length; i += 1)
						{
							updatedValues[key][i] = childValues[0][String(i)];
						}
					}
					else if(value instanceof Object)
					{
						let childValues = await this.processValues(value);

						updatedValues[key] = childValues[0];
						Object.assign(filesObject, childValues[1]);
					}
					else
					{
						updatedValues[key] = value;
					}
				}
			}

			return [updatedValues, filesObject];
		},

		/**
		 * sets the original for on-change comparison
		 */
		setOriginal: function()
		{
			originalString = JSON.stringify(this.values);
			currentObject = this.values;
		},

		/**
		 * Submits the form
		 * @param	{boolean}	addAnother	Whether to submit the form and then display another add form
		 */
		submitForm: async function(addAnother)
		{
			this.loading = true;
			let uploadUrl = `/admin/action/upload/`;
			let url;

			if(this.type === "create")
			{
				url = `/admin/action/new/${this.class}/`;
			}
			else
			{
				url = `/admin/action/edit/${this.class}/${this.id}/`
			}

			let processedValues = await this.processValues(this.values);
			processedValues[0].addAnother = addAnother;

			let formData = new FormData();
			formData.append("json", this.getJson(processedValues[0]));

			if(this.active !== undefined)
			{
				formData.append("active", String(this.active));
			}

			// This is the progress bar for uploading files one by one
			this.maxProgress = Object.keys(processedValues[1]).length;
			this.progress = 0;

			if(this.maxProgress === 0)
			{
				this.maxProgress = undefined;
				this.progress = undefined;
			}

			// This uploads any files one by one, to bypass PHP's absolute upload size
			for(let key in processedValues[1])
			{
				if(processedValues[1].hasOwnProperty(key))
				{
					let fileData = new FormData();
					fileData.append(key, processedValues[1][key]);

					// Note: We're awaiting twice, once to download the data, and once more to generate JSON so we can check that no errors were thrown
					await (await window.fetch(uploadUrl,
					{
						method: "post",
						body: fileData,
						headers: {"X-Requested-With": "XMLHttpRequest"}
					})).json();

					this.progress += 1;
				}
			}

			let response = await window.fetch(url,
			{
				method: "post",
				body: formData,
				headers: {"X-Requested-With": "XMLHttpRequest"}
			});

			let text = await response.text();
			let json;

			try
			{
				json = JSON.parse(text);
				this.rawOutput = "";
			}
			catch(ignored)
			{
				this.rawOutput = text;
				this.loading = false;
				this.maxProgress = undefined;
				this.progress = undefined;
				this.errors = ["Unexpected response from the server"];
				return;
			}

			if(json.success)
			{
				this.setOriginal();
				let currentPath = this.$route.path;
				let newPath = this.$route.path;

				if(json.url !== null)
				{
					let newRoute =
					{
						path: json.url,
						query: Object.assign({}, this.$route.query)
					};

					await this.$router.replace(newRoute);
					newPath = this.$route.path;
				}

				// The route updater won't trigger if the paths are the same
				if(currentPath === newPath)
				{
					this.fetchData();
				}
			}
			else
			{
				this.loading = false;
				this.maxProgress = undefined;
				this.progress = undefined;
				this.errors = json.errors;
			}
		}
	}
}