import EditSvg from "../svgs/EditSvg.js";
import Remove from "../widgets/Remove.js";

export default
{
	name: "file-summary",
	
	template:
	`
		<li @dragstart="$emit('dragstart', $event)" @dragend="$emit('dragend', $event)">
			<a v-if="file.thumb !== undefined" class="image" href="#" @click.prevent="$emit('select')">
				<img :src="file.thumb" alt="" />
			</a>
			<span class="inline">
				<a class="name" href="#" @click.prevent="$emit('select')"><span>{{ file.filename }}</span></a>
				<span class="controls">
					<button class="icon edit-icon" type="button" @click="$emit('rename')"><edit-svg /></button>
					<remove class="icon remove-icon" type="file" :label="file.filename" :confirm="true" @remove="$emit('delete')" />
				</span>
			</span>
		</li>
	`,
	
	components:
	{
		"edit-svg": EditSvg,
		"remove": Remove,
	},
	
	props:
	{
		file: Object	// The file data
	}
};