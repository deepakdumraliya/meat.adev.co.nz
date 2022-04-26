let componentClass = undefined;

/**
 * A special, slightly cheating component, for displaying a pretty confirm popup rather than the default browser one
 */
export default
{
	name: "confirm",
	
	template:
	`
		<section class="confirm-dialog">
			<div class="dialog-window">
				<h2 class="heading">
					{{ heading }}
				</h2>
				<p>
					{{ message }}
				</p>
				<div class="actions">
					<button type="button" class="button negative" v-on:click.prevent="negativeClicked()">{{ negativeTitle }}</button> <button class="button positive" :class="{destructive: destructive}" v-on:click.prevent="positiveClicked()">{{ positiveTitle }}</button>
				</div>
			</div>
		</section>
	`,
	
	props:
	{
		heading: String,			// The heading to display
		message: String,			// The message to display
		negativeTitle: String,		// The label to give the negative button
		negativeAction: Function,	// The action to trigger when the negative button is clicked
		positiveTitle: String,		// The label to give the positive button
		positiveAction: Function,	// The action to trigger when the positive button is clicked
		destructive: Boolean		// Whether this is a destructive action (gives the positive button destructive styling)
	},

	methods:
	{
		/**
		 * Closes this confirm box
		 */
		close: function()
		{
			this.$el.remove();
			this.$destroy();
		},
		
		/**
		 * Triggered when the negative button is clicked
		 */
		negativeClicked: function()
		{
			if(this.negativeAction !== undefined)
			{
				this.negativeAction();
			}

			this.close();
		},
		
		/**
		 * Triggered when the positive button is clicked
		 */
		positiveClicked: function()
		{
			if(this.positiveAction !== undefined)
			{
				this.positiveAction();
			}

			this.close();
		}
	},
	
	/**
	 * Triggers the confirm box
	 * @param	{string}	heading			The heading to display
	 * @param	{string}	message			The message to display
	 * @param	{Object}	negative		The title and action to give the negative button
	 * @param	{Object}	positive		The title and action to give the positive button
	 * @param	{boolean}	destructive		Whether this is a destructive action (gives the positive button destructive styling)
	 */
	show: function(heading, message, negative, positive, destructive = false)
	{
		if(componentClass === undefined)
		{
			componentClass = Vue.extend(this);
		}

		let instance = new componentClass({propsData:
		{
			heading: heading,
			message: message,
			negativeTitle: negative.title,
			negativeAction: negative.action,
			positiveTitle: positive.title,
			positiveAction: positive.action,
			destructive: destructive
		}});

		let div = document.createElement("div");
		document.body.appendChild(div);
		instance.$mount(div);
	}
};