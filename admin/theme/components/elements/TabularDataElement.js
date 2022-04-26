import ValueElement, {validateRequiredText} from "./core/ValueElement.js";

/**
 * A table of inputs, for tabular data
 */
export default
{
	extends: ValueElement,
	name: "tabular-data-element",

	template:
	`
		<div>
			<h2>{{ data.label }}</h2>
			<table class="tabular-data">
				<thead>
					<tr>
						<td></td>
						<td v-for="column in data.columns">
							{{ column.label }}
						</td>
					</tr>
				</thead>

				<tbody>
					<tr v-for="(row, rowIndex) in data.rows">
						<td>{{ row.label }}</td>
						<td v-for="(column, columnIndex) in data.columns">
							<div class="cell"><input type="text" v-model="values[data.name][rowIndex].cells[columnIndex].value" :disabled="disabled" ref="input" @input="validate" /></div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	`,

	mounted: function() 
	{
		//console.log(JSON.stringify(this.values[this.data.name]));
	}
};