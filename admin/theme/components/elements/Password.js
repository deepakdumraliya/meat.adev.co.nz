import ElementBase from "./core/ElementBase.js";
import ValueElement, {validateRequiredText} from "./core/ValueElement.js";
import eventHub from "../edit/eventHub.js";

/**
 * Displays a password element. Password elements never have a default value, even if one is passed to them
 */
export default
{
	name: "password",

	template:
	`
		<element-base :wrap-label="true" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<input type="password" autocomplete="new-password" v-model="values[data.name]" :disabled="disabled" ref="input" @input="validate" />
		</element-base>
	`,

	components: {"element-base": ElementBase},

	props:
	{
		data: Object,		// The data for this object
		values: Object,		// Values for this element and all of its siblings
		disabled: Boolean	// Whether this element is currently disabled
	},

	data: function()
	{
		return {error: null};
	},

	mounted: function()
	{
		eventHub.$emit("component-mounted");
	},

	methods:
	{
		/**
		 * This element probably shouldn't be used as a label element, but if it is, this function returns the current value
		 * @return	{string}	The current value of this element
		 */
		getGeneratorLabel: function()
		{
			return this.values[this.data.name];
		},

		/**
		 * Triggers the browser to focus on this element
		 */
		focus: function()
		{
			this.$refs.input.focus();
		},

		validate: ValueElement.methods.validate
	},

	validations:
	{
		required: validateRequiredText
	}
};