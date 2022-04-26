import ElementBase from "./core/ElementBase.js";
import TextElement from "./TextElement.js";

/**
 * A phone input to display in the form
 */
export default
{
	extends: TextElement,
	name: "phone",

	template:
	`
		<element-base :wrap-label="true" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<input type="tel" v-model="values[data.name]" :disabled="disabled" ref="input" @input="validate" />
		</element-base>
	`,

	components: {"element-base": ElementBase}
};