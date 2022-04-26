import {imageIsSvg, retrieveImageUrl} from "./ImageElement.js";

/**
 * Allows a user to edit an uploaded image
 */
export default
{
	name: "image-editor",
	
	template:
	`
		<div class='editor'>
			<div class="image-wrapper" ref="wrapper">
				<img :src="imageUrl" ref="image" />
			</div>
		</div>
	`,
	
	props:
	{
		image: [String, HTMLCanvasElement, File],	// The image to edit
		cropWidth: Number,							// The width to crop to, can be undefined
		cropHeight: Number,							// The height to crop to, can be undefined
		currentCrop: Object							// An object representing the current crop, should have x, y, width and height properties
	},
	
	data: function()
	{
		return {
			imageUrl: null,
			cropper: undefined
		}
	},
	
	watch:
	{
		image: function(newImage)
		{
			this.imageUrl = retrieveImageUrl(newImage);
		}
	},

	mounted: async function()
	{
		this.imageUrl = await retrieveImageUrl(this.image);
		await Vue.nextTick();
		
		// Wait for the image to be loaded, from the server is necessary
		await new Promise((resolve) =>
		{
			this.$refs.image.addEventListener("load", resolve);
		});
		
		// Don't trigger the cropper if it's an SVG, but we need to apply some dimensions
		if(imageIsSvg(this.image))
		{
			this.$refs.image.width = this.$refs.image.naturalWidth;
			this.$refs.image.height = this.$refs.image.naturalHeight;
			return;
		}
		
		let aspectRatio = undefined;

		// Crop aspect ratio is optional
		if(this.cropWidth !== undefined && this.cropHeight !== undefined)
		{
			aspectRatio = this.cropWidth / this.cropHeight;
		}
		
		// Setup a new Cropper object
		this.cropper = new window.Cropper(this.$refs.image,
		{
			aspectRatio: aspectRatio,
			autoCropArea: 1,
			maxContainerWidth: "100%",
			viewMode: 1,
			zoomable: false,
			
			ready: () =>
			{
				// Update the cropper object to match the current crop, if it's defined in the prop
				if(this.currentCrop !== undefined)
				{
					let cropData = {
						x: this.currentCrop.x,
						y: this.currentCrop.y,
						width: this.currentCrop.width,
						height: this.currentCrop.height,
						rotate: 0,
						scaleX: 1,
						scaleY: 1
					};
					
					this.cropper.setData(cropData);
				}
			}
		});
	},
	
	methods:
	{
		/**
		 * Grabs the current crop for the image
		 * @return	{Cropper.Data}	The current cropping data
		 */
		getCrop: function()
		{
			return this.cropper?.getData();
		}
	}
};