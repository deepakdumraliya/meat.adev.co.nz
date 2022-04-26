import ElementBase from "../core/ElementBase.js";
import FileElement from "../FileElement.js";
import GroupElement from "../core/GroupElement.js";
import ImageEditor from "./ImageEditor.js";
import ImagePreview from "./ImagePreview.js";
import Loading from "../../widgets/Loading.js";
import Remove from "../../widgets/Remove.js";
import UploadInput from "../../edit/UploadInput.js";
import {centreCropImage, cropImage, scaleImage, smartCropImage} from "../../../scripts/utility.js";

let locked = false;

/**
 * Allows a user to upload images
 */
export default
{
	extends: GroupElement,
	name: "image-element",

	template:
	`
		<element-base :wrap-label="false" :label="data.label" :details="data.details" :info="data.info">
			<upload-input :value="null" :accept="data.accept" :disabled="disabled" :button-only="true" @input="updateImages" />
			<div class="sizes">
				<p>
					This image {{ values[data.name][data.elements[0].name] === null ? "will be" : "has been" }} automatically resized to the following sizes:
				</p>
				<ul>
					<li v-for="element in data.elements">
						<strong>{{ element.label}}:</strong> {{ cropMessageFor(element) }}
					</li>
				</ul>
				<p>
					Click on an image to change how it is cropped.
				</p>
			</div>
			<div class="preview-box" v-show="pending || hasImages">
				<a href="#" @click.prevent="previewClicked(element)" v-for="element in data.elements" :key="element.id">
					<span class="preview-label" v-if="data.elements.length > 1">{{ element.label }}</span>
					<image-preview :image="values[data.name][element.name]" ref="preview" />
				</a>
			</div>
			<transition name="fade">
				<section class="image-editor" v-if="open">
					<div class="grid-cancel-backdrop" @click="open = false"></div>
					<div class="title">
						<h2>
							{{ current.label }}
						</h2>
						<p>
							{{ cropMessageFor(current) }}
						</p>
					</div>
					<div class="image-area">
						<image-editor :image="originals.get(current.name)" :crop-width="current.crop ? current.width : undefined" :crop-height="current.crop ? current.height : undefined" :current-crop="crops.get(current.name)" ref="editor" />
					</div>
					<div class="actions">
						<button type="button" class="button" v-on:click.prevent="donePressed">Done</button>
					</div>
				</section>
			</transition>
			<label v-show="pending || hasImages"><remove :confirm="false" @remove="updateImages(null)" /> Remove</label>
		</element-base>
	`,

	components:
	{
		"element-base": ElementBase,
		"file-element": FileElement,
		"image-editor": ImageEditor,
		"image-preview": async() => ImagePreview,
		"loading": Loading,
		"remove": Remove,
		"upload-input": UploadInput
	},
	
	data: function()
	{
		return {
			current: undefined,
			currentImageUrl: null,
			open: false,
			pending: false,
			crops: new Map(),
			originals: new Map()
		}
	},
	
	computed:
	{
		/**
		 * Checks if images have been uploaded to any of the dimensions
		 * @return	{boolean}	Whether there are any uploaded images
		 */
		hasImages: function()
		{
			for(let element of this.data.elements)
			{
				if(this.values[this.data.name][element.name] !== null)
				{
					return true;
				}
			}
			
			return false;
		}
	},

	watch:
	{
		current: async function(current)
		{
			this.currentImageUrl = null;

			if(this.values[this.data.name] !== null)
			{
				this.currentImageUrl = await retrieveImageUrl(this.values[this.data.name][current.name]);
			}
		}
	},
	
	created: function()
	{
		for(let element of this.data.elements)
		{
			this.originals.set(element.name, this.values[this.data.name][element.name]);
		}

		// Trigger the watch method for the first time
		this.current = this.data.elements[0];
	},
	
	methods:
	{
		/**
		 * Updates all the dimensions with a newly uploaded image
		 * @param	{CanvasSource}		data	Any type that can be passed to smartCropImage() or scaleImage()
		 * @return	{Promise<void>}				A promise for the element being finished
		 */
		updateImages: async function(data)
		{
			this.pending = data !== null;
			
			// In order to prevent this from murdering the CPU, we only allow one image element to do resizing at a time
			while(locked)
			{
				await new Promise((resolve) => window.setTimeout(resolve, 100));
			}
			
			locked = true;
			let promises = [];
			
			// Iterate over our child dimensions, so we can have multiple sizes in the same image
			for(let element of this.data.elements)
			{
				this.originals.set(element.name, undefined);
				this.values[this.data.name][element.name] = null;
				
				if(data !== null)
				{
					this.values[this.data.name][element.name] = undefined;
					
					// Store the original size for later, in case we want to manually resize at some point
					this.originals.set(element.name, data);
					
					// Ensure that preview element has been created
					await Vue.nextTick();
					
					for(let imagePreview of this.$refs.preview)
					{
						imagePreview.pending = this.pending;
					}
					
					if(imageIsSvg(data))
					{
						// SVGs need to be stored as-is
						this.values[this.data.name][element.name] = data;
					}
					else if(element.crop)
					{
						let crop = {};
						
						// Automatically crop this image to its heuristically defined "best" crop position. Can be manually cropped if this doesn't suit.
						promises.push(smartCropImage(data, [element.width, element.height], crop).then((image) =>
						{
							this.values[this.data.name][element.name] = image;
							this.crops.set(element.name, crop);
						}));
					}
					else
					{
						// Scale the image to fit within the maximum dimensions
						promises.push(scaleImage(data, [element.width, element.height]).then((image) =>
						{
							this.values[this.data.name][element.name] = image;
						}));
					}
				}
			}
			
			// Wait for all dimensions to finish resizing before unlocking
			await Promise.all(promises);
			this.pending = false;
			locked = false;
		},
		
		/**
		 * Opens the editor window when one of the previews is clicked
		 * @param	{Object}	element		The element object for the child dimension that was clicked
		 */
		previewClicked: function(element)
		{
			this.open = true;
			this.current = element;
		},
		
		/**
		 * Gets the cropping message for a specific dimension
		 * @param	{Object}	element		The object for the element to get the dimension for
		 * @return	{string}				The cropping message for that element
		 */
		cropMessageFor: function(element)
		{
			if(element.crop)
			{
				return `Cropped to ${element.width}px wide by ${element.height}px high`;
			}
			else if(element.width === null && element.height === null)
			{
				return "Will not be cropped or scaled";
			}
			else
			{
				let dimensions = [];
				
				if(element.width !== null)
				{
					dimensions.push(`${element.width}px wide`);
				}
				
				if(element.height !== null)
				{
					dimensions.push(`${element.height}px high`);
				}
				
				return `Scaled down to no larger than ${dimensions.join(" by ")}`;
			}
		},
		
		/**
		 * Finds the value in the child elements which should be used for the preview value
		 * @param	{string}					name	The name of the element to search for
		 * @return	{CanvasSource|undefined}			The image to use for the preview
		 */
		findGeneratorLabel: function(name)
		{
			for(let element of this.data.elements)
			{
				if(element.name === name)
				{
					return this.values[this.data.name][element.name];
				}
			}
			
			return undefined;
		},
		
		/**
		 * Gets the label to use for an ancestor grid element
		 * @return	{CanvasSource|undefined}	Just returns findGeneratorLabel()
		 */
		getGeneratorLabel: function()
		{
			return this.findGeneratorLabel(this.data.name);
		},
		
		/**
		 * TODO: Currently not doing anything
		 * @return	{boolean}	Whether the child dimensions are valid
		 */
		validate: function()
		{
			//let elements = this.$refs.element;
			//return validateChildren(elements);
			
			return true;
		},
		
		/**
		 * Triggered when cropping is finished in the editor, at which point we crop the image and pass it to the values object
		 */
		donePressed: async function()
		{
			let data = this.$refs.editor.getCrop();
			this.open = false;
			
			let current = this.current;
			
			let original = this.originals.get(current.name);
			let image;
			
			if(imageIsSvg(original))
			{
				image = original;
			}
			else
			{
				this.crops.set(current.name, data);
				
				// If we scaled down the image to fit the screen, these values can sometimes be off by slight amounts
				data =
				{
					height: Math.round(data.height),
					width: Math.round(data.width),
					x: Math.round(data.x),
					y: Math.round(data.y)
				};
				
				image = await cropImage(original, [data.x, data.y], [data.width, data.height]);
				
				if(this.current.crop)
				{
					image = await centreCropImage(image, [this.current.width, this.current.height]);
				}
				else
				{
					image = await scaleImage(image, [this.current.width, this.current.height]);
				}
			}
			
			this.values[this.data.name][current.name] = image;
		}
	}
};

/**
 * Checks if an image is an SVG
 * @param	{CanvasSource|null}		image	The image to check
 * @return	{boolean}						Whether it's an actual image
 */
export let imageIsSvg = function(image)
{
	if(image === null)
	{
		return false;
	}
	else if(typeof image === "string" || image instanceof String)
	{
		return image.endsWith(".svg");
	}
	else
	{
		return image.name.endsWith(".svg");
	}
};

/**
 * Gets the actual URL for an image value
 * @param	{CanvasSource|null}		value	The value to find the URL for
 * @return	{Promise<string|null>}			The URL for that value
 */
export let retrieveImageUrl = async function(value)
{
	if(value === null)
	{
		return null;
	}
	else if(value instanceof HTMLCanvasElement)
	{
		return value.toDataURL();
	}
	else if(value instanceof File)
	{
		return await new Promise((resolve) =>
		{
			let reader = new FileReader();
			
			reader.onloadend = function()
			{
				resolve(reader.result);
			};
			
			reader.readAsDataURL(value);
		});
	}
	else
	{
		return value;
	}
};