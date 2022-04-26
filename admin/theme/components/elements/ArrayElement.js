import ValueElement, {validateRequiredText} from "./core/ValueElement.js";
import Generator from "./generators/Generator.js";
import FormElement from "./core/FormElement.js";

/**
 * A table of inputs, for tabular data
 */
export default
{
	extends: ValueElement,
	name: "array-element",

	template:
	`
		<div>
			<h2>{{ data.label }}</h2>
			<div v-for="(generator, index) in data.generators">
				<form-element :data="element" :values="values[data.name][index]" v-for="element in generator.elements" :key="element.name" :disabled="disabled" ref="element" />
			</div>
		</div>
	`,

	components: 
	{
		"form-element": async() => FormElement,
	},

	data: function()
	{
		//console.log(JSON.stringify(this.values));
		return {};
	},
	
	mounted: function() 
	{
		//console.log(JSON.stringify(this.values[this.data.name]));
		//console.log(JSON.stringify(this.data.name));
	}
};