import ElementBase from "./core/ElementBase.js";
import UploadInput from "../edit/UploadInput.js";
import ValueElement from "./core/ValueElement.js";
import {getFilenameFromUrl} from "../../scripts/utility.js";

/**
 * An element for selecting a file / files
 */
export default
{
	extends: ValueElement,
	name: "file-element",

	template:
	`
		<element-base :wrap-label="false" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<upload-input v-model="values[data.name]" :disabled="disabled" :accept="data.accept === null ? false : data.accept" ref="input" @input="validate" />
		</element-base>
	`,

	components:
	{
		"element-base": ElementBase,
		"upload-input": UploadInput
	},
	
	methods:
	{
		/**
		 * Focuses on this element
		 */
		focus: function()
		{
			this.$refs.input.focus();
		},
		
		/**
		 *  Gets the value to use as a label from this element
		 * @return	{string}	The value
		 */
		getGeneratorLabel: function()
		{
			let value = this.values[this.data.name];
			
			if(value === null)
			{
				return "";
			}
			if(value instanceof File)
			{
				return value.name;
			}
			else
			{
				return getFilenameFromUrl(value);
			}
		}
	},
	
	validations:
	{
		/**
		 * Checks whether this field is required
		 * @param	{File|string}	value	The current value for the element
		 * @return	{String|null}			An error message, or null if it validates
		 */
		required: function(value)
		{
			return value === null ? "This field is required" : null;
		}
	}
};