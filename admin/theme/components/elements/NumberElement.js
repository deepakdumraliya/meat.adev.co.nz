import ElementBase from "./core/ElementBase.js";
import TextElement from "./TextElement.js";

/**
 * A number input to display in the form
 */
export default
{
	extends: TextElement,
	name: "number-element",

	template:
	`
		<element-base :wrap-label="true" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<input type="number" v-model="values[data.name]" :disabled="disabled" ref="input" @input="validate" />
		</element-base>
	`,

	components: {"element-base": ElementBase}
};