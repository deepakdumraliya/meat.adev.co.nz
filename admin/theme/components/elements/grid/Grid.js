import AddSvg from "../../svgs/AddSvg.js";
import Generators from "../generators/Generators.js";
import GridItem from "./GridItem.js";
import UploadInput from "../../edit/UploadInput.js";

/**
 * Displays a grid of images that otherwise act like child generators
 */
export default
{
	extends: Generators,
	name: "grid",
	
	template:
	`
		<div class="generators">
			<h2 v-if="data.heading" class="generator-group-label" >{{ data.heading }}</h2>
			<upload-input v-if="data.absolute === null" :value="null" accept=".png,.gif,.jpeg,.jpg,.svg" :multiple="true" label="Bulk Upload" :disabled="disabled" :button-only="true" @input="updateChildImages" />
			<div class="sizes">
				<p>
					These images {{ internalValues.length > 0 ? "have been" : "will be" }} automatically resized. Click on an item to view all the generated versions of the image, and to modify how they are cropped.
				</p>
			</div>
			<draggable :list="generators" tag="div" :disabled="!hasPosition() || itemOpen()" handle=".preview" @sort="sort">
				<transition-group name="fade" tag="div" class="generator-grid">
					<grid-item :data="generator" :values="internalValues" :generator-index="index" :singular="data.singular" :label-key="data.labelKey" v-for="(generator, index) in generators" :key="generator.temporaryId" :can-remove="data.absolute === null" :disabled="disabled" @toggleRemove="toggleRemove(index)" ref="generator" />
				</transition-group>
			</draggable>
			<button v-if="data.absolute === null" type="button" class="button add-button" @click.prevent="addGenerator"><add-svg /> Add {{ data.label || data.singular }}</button>
		</div>
	`,
	
	components:
	{
		"add-svg": AddSvg,
		"grid-item": GridItem,
		"upload-input": UploadInput
	},
	
	data: function()
	{
		return {openAbsolute: false};
	},
	
	methods:
	{
		/**
		 * Adds all the bulk uploaded images as new child generators, and then passes the uploaded image to them
		 * @param	{File[]}	fileList	The list of uploaded files
		 */
		updateChildImages: function(fileList)
		{
			for(let file of fileList)
			{
				let item = this.addGenerator();
				item.closed = true;
				
				// Wait for the item to be mounted
				Vue.nextTick().then(() =>
				{
					for(let gridItem of this.$refs.generator)
					{
						if(gridItem.data === item)
						{
							gridItem.updateImages(file);
						}
					}
				});
			}
		},
		
		/**
		 * Checks if there are currently any open items in this grid
		 * @return	{boolean}	Whether there are any open items
		 */
		itemOpen: function()
		{
			let items = this.$refs.generator;
			
			if(items === undefined)
			{
				return false;
			}
			
			for(let item of items)
			{
				if(item.open)
				{
					return true;
				}
			}
			
			return false;
		}
	}
};