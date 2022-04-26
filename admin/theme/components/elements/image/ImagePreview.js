import Loading from "../../widgets/Loading.js";
import {retrieveImageUrl} from "./ImageElement.js";

/**
 * Displays a scaled down preview of an image
 */
export default
{
	name: "image-preview",
	
	template:
	`
		<div class='image-preview' v-show="pending || image != null">
			<loading v-if="pending" />
			<img v-else-if="thumbnailUrl == null" src="/admin/theme/images/placeholder.png" width="200" height="160" alt="No Image" />
			<img v-else :src="thumbnailUrl" />
		</div>
	`,

	components: {"loading": Loading},
	
	props:
	{
		image: [String, File, HTMLCanvasElement]	// The image to display the preview for
	},

	data: function()
	{
		return {
			thumbnailUrl: null,
			pending: true
		}
	},

	watch:
	{
		"image": async function(image)
		{
			this.thumbnailUrl = null;

			if(image != null)
			{
				this.thumbnailUrl = await retrieveImageUrl(image);
				this.pending = false;
			}
		}
	},

	created: async function()
	{
		if(this.image != null)
		{
			this.thumbnailUrl = await retrieveImageUrl(this.image);
		}

		this.pending = false;
	}
};