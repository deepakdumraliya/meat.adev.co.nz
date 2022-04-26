/**
 * Displays a progress bar for a certain amount of progress
 */
export default
{
	name: "loading-progress",
	
	template:
	`
		<div class="loading-progress">
			<!--suppress MagicNumberJS -->
			<div class="bar" :style="{width: ((value / max) * 100) + '%'}"></div>
		</div>
	`,
	
	props:
	{
		max: Number,	// The maximum this progress bar can get to
		value: Number	// The current value for this progress bar
	}
};