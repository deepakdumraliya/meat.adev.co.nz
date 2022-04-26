import ChildGenerator from "../generators/ChildGenerator.js";
import FormElement from "../core/FormElement.js";
import ImagePreview from "../image/ImagePreview.js";
import Loading from "../../widgets/Loading.js";
import Remove from "../../widgets/Remove.js";
import eventHub from "../../edit/eventHub.js";
import {setGridImageForElements} from "../core/GroupElement.js";

/**
 * A child item for a grid element
 */
export default
{
	extends: ChildGenerator,
	name: "grid-item",

	template:
	`
		<section class="grid-item" :class="{removed: removed}">
			<div class="preview">
				<a href="#" @click.prevent="open = true">
					<header>
						<image-preview :image="previewImage" v-if="previewImage" />
						<img v-else-if="previewImage === null" src="/admin/theme/images/placeholder.png" width="200" height="160" alt="No Image" />
						<loading v-else />
					</header>
				</a>
				<div class="controls">
					<label class="element checkbox-element" v-if="(values[generatorIndex] && values[generatorIndex].active) !== undefined"><input type="checkbox" v-model="values[generatorIndex].active" /><checkbox-indicator /> Active</label>
					<label v-if="canRemove" class="remove-holder"><remove @remove="toggleRemove()" v-if="ready" /> <span v-if="removed">Marked for deletion</span></label>
				</div>
			</div>
			<transition name="fade">
				<div class="grid-popup-wrapper" v-show="open">
					<div class="grid-cancel-backdrop" @click="open = false"></div>
					<div class="grid-popup">
						<form-element :data="element" :values="values[generatorIndex]" v-for="element in data.elements" :key="element.name" :disabled="disabled || removed" ref="element" />
						<footer class="actions">
							<button type="button" class="button" @click.prevent="open = false">Done</button>
						</footer>
					</div>
				</div>
			</transition>
		</section>
	`,
	
	components:
	{
		"image-preview": ImagePreview,
		"form-element": async() => FormElement,
		"loading": Loading,
		"remove": Remove
	},
	
	data: function()
	{
		return {timestamp: new Date().getTime()};
	},
	
	computed:
	{
		/**
		 * Gets the image to display as the preview for this grid item
		 * @return	{String|HTMLCanvasElement|null|undefined}	Should be either a path, a canvas or undefined if there's no preview
		 */
		previewImage: function()
		{
			// Referencing timestamp to force recomputation, the value is unused
			let ignored = this.timestamp;
			let value = this.getLabel();
			return value === "Untitled" ? undefined : value;
		}
	},
	
	created: function()
	{
		eventHub.$on("component-mounted", () =>
		{
			this.timestamp = new Date().getTime();
		});
	},
	
	methods:
	{
		/**
		 * Passes a bulk uploaded image down to the receiving image element
		 * @param	{File}				data	The image file to pass down
		 * @return	{Promise<void>}				For when the method has finished
		 */
		updateImages: async function(data)
		{
			let elements = undefined;
			
			while(elements === undefined)
			{
				await Vue.nextTick();
				elements = this.$refs.element;
			}
			
			setGridImageForElements(elements, data);
		}
	}
};