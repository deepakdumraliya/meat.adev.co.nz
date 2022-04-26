import Loading from "./widgets/Loading.js";
import LoadingProgress from "./widgets/LoadingProgress.js";

/**
 * The base template for Vue pages
 */
export default
{
	name: "base-template",
	
	template:
	`
		<section>
			<div v-show="!loading">
				<slot name="breadcrumbs"></slot>
			</div>
			<header class="content-header" v-show="!loading">
				<div class="title">
					<h1>
						<slot name="heading"></slot>
					</h1>
					<slot name="button"></slot>
				</div>
				<slot name="search"></slot>
			</header>
			<div class="content">
				<loading v-if="loading" />
				<loading-progress v-if="loading && maxProgress && progress" :max="maxProgress" :value="progress" />
				<div v-show="!loading">
					<slot></slot>
				</div>
			</div>
		</section>
	`,
	
	props:
	{
		loading: Boolean,		// Whether the content is currently loading or not
		progress: Number,		// The current loading progress
		maxProgress: Number		// The maximum progress we need to make
	},
	
	components:
	{
		"loading": Loading,
		"loading-progress": LoadingProgress
	}
}