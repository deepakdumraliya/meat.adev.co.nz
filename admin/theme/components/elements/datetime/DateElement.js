import CheckboxIndicator from "../checkboxes/CheckboxIndicator.js";
import ElementBase from "../core/ElementBase.js";
import ValueElement, {validateRequiredText} from "../core/ValueElement.js";

/**
 * Allows the user to pick a date
 */
export default
{
	extends: ValueElement,
	name: "date-element",
	
	template:
	`
		<element-base class="date-time-wrapper" :wrap-label="false" :label="data.label" :details="data.details" :info="data.info" :error="error">
			<datepicker v-show="!forceNull || !data.allowNull" placeholder="Select Date" v-model="internalDate" @input="validate" />
			<input v-if="withTime" v-show="!forceNull" type="time" placeholder="Select Time" v-model="internalTime" :disabled="disabled" ref="input" @input="validate" />
			<label v-if="data.allowNull" class="checkbox-element">
				<div class="element-label">None</div>
				<div class="element-content"><input type="checkbox" v-model="forceNull" :disabled="disabled" /><checkbox-indicator /></div>
			</label>
		</element-base>
	`,
	
	props:
	{
		withTime: Boolean	// Whether to display a time picker as well
	},
	
	data: function()
	{
		return {
			internalDate: null,
			internalTime: null,
			forceNull: false
		};
	},
	
	components:
	{
		"checkbox-indicator": CheckboxIndicator,
		"element-base": ElementBase,
		"datepicker": window.vuejsDatepicker
	},
	
	watch:
	{
		internalDate: function(newValue)
		{
			if(newValue instanceof Date)
			{
				let month = (newValue.getMonth() + 1);
				month = month < 10 ? "0" + month : month;
				newValue = newValue.getFullYear() + "-" + month + "-" + newValue.getDate();
			}
			
			if(this.withTime)
			{
				newValue += " " + this.internalTime;
			}
			
			this.values[this.data.name] = newValue;
		},
		
		internalTime: function(newValue)
		{
			let dateValue = this.internalDate;
			
			if(this.internalDate instanceof Date)
			{
				dateValue = this.internalDate.getFullYear() + "-" + (this.internalDate.getMonth() + 1) + "-" + this.internalDate.getDate();
			}
			
			if(this.withTime)
			{
				newValue = dateValue + " " + this.internalTime;
			}
			
			this.values[this.data.name] = newValue;
		},
		
		forceNull: function(newValue)
		{
			if(newValue)
			{
				this.values[this.data.name] = null;
			}
			else
			{
				let dateValue = this.internalDate;
				
				if(this.internalDate instanceof Date)
				{
					dateValue = this.internalDate.getFullYear() + "-" + (this.internalDate.getMonth() + 1) + "-" + this.internalDate.getDate();
				}
				
				if(this.withTime)
				{
					newValue = dateValue + " " + this.internalTime;
				}
				
				this.values[this.data.name] = newValue;
			}
		},
		
		values:
		{
			deep: true,
			
			handler: function()
			{
				this.updateFromValues();
			}
		}
	},
	
	methods:
	{
		/**
		 * Updates the internal values from the values object
		 */
		updateFromValues: function()
		{
			let value = this.values[this.data.name];
			
			this.forceNull = value === null;
			
			if(value === null)
			{
				this.internalDate = null;
				this.internalTime = null;
			}
			else
			{
				let segments = value.split(" ");
				this.internalDate = segments[0];
				
				if(this.withTime)
				{
					this.internalTime = segments[1] || "";
				}
				else
				{
					this.internalTime = null;
				}
			}
		},
		
		/**
		 * Gets a label for an ancestor element somewhere
		 * @return	{string|null}	The current value of the element
		 */
		getGeneratorLabel: function()
		{
			return this.values[this.data.name];
		},
		
		/**
		 * Focuses the browser on this element
		 */
		focus: function()
		{
			this.$refs.input.focus();
		}
	},
	
	created: function()
	{
		this.updateFromValues();
	},
	
	validations:
	{
		required: validateRequiredText
	}
};