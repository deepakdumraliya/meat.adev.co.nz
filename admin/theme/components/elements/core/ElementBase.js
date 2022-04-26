/**
 * A template for most of the basic element types
 */
export default
{
	name: "element-base",
	
	template:
	`
		<component :is="wrapLabel ? 'label' : 'div'" class='element'>
			<div class="element-label">
				<span class="primary">{{ label }}</span> <span class="secondary" v-if="details">{{ details }}</span>
			</div>
			<div class="element-content">
				<slot></slot>
			</div>
			<div class="element-info" v-if="info">
				{{ info }}
			</div>
			<div class="element-error" v-if="error">
				{{ error }}
			</div>
		</component>
	`,
	
	props:
	{
		wrapLabel: Boolean,		// Whether this component should be wrapped with a <label> element or not
		label: String,			// The label to give this element
		details: String,		// A short hint for this element
		info: String,			// Further information about how this element will be used
		error: String			// An error message to display for this element
	}
}