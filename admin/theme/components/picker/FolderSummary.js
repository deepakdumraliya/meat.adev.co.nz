import EditSvg from "../svgs/EditSvg.js";
import FolderUpSvg from "../svgs/FolderUpSvg.js";
import FolderSvg from "../svgs/FolderSvg.js";
import Remove from "../widgets/Remove.js";

export default
{
	name: "folder-summary",
	
	template:
	`
		<li class='folder' :class="{active: dropTarget}" @dragstart="$emit('dragstart', $event)" @dragend="$emit('dragend', $event)" @drop.prevent="$emit('drop', $event)" @dragover.prevent="dropTarget = true" @dragleave="dropTarget = false">
			<span class="inline">
				<a class="name" href="#" @click.prevent="$emit('select')">
					<folder-up-svg v-if="isParent" class="folder-icon" />
					<folder-svg v-else class="folder-icon" />
					<span>{{ folder.filename }}</span>
				</a>
				<span class="controls" v-if="!isParent">
					<button class="icon edit-icon" type="button" @click.prevent="$emit('rename')"><edit-svg /></button>
					<remove class="icon remove-icon" type="folder" :label="folder.filename" :confirm="true" @remove="$emit('delete')" />
				</span>
			</span>
		</li>
	`,
	
	components:
	{
		"edit-svg": EditSvg,
		"folder-svg": FolderSvg,
		"folder-up-svg": FolderUpSvg,
		"remove": Remove
	},
	
	data: function()
	{
		return {
			dropTarget: false
		}
	},
	
	props:
	{
		folder: Object,		// The folder data
		isParent: Boolean	// Whether this is the root folder
	}
}