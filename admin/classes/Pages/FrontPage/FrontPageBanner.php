<?php
	namespace Pages\FrontPage;

	use Pages\PageBanner;
	
	/**
	 * Banners / slides for the front page of the site
	 */
	class FrontPageBanner extends PageBanner
	{
		/*~~~~~
		 * setup
		 **/
		// Entity / Generator
		public $class = self::class;

		// SiteBanner
		// const DESKTOP_IMAGE_HEIGHT = 1064; // // 2560 / [design canvas width] * [design banner height]
		const PARENT_CLASS = FrontPage::class;

	const DO_CAPTION = TRUE;
	const DO_TITLE = TRUE;
		const PARENT_TITLE_PROPERTY = parent::PARENT_TITLE_PROPERTY;
	const DO_TEXT = TRUE;
	const DO_LINK = TRUE;
	const DO_BUTTON = TRUE;
	const DESKTOP_IMAGE_WIDTH = 1900;
	const DESKTOP_IMAGE_HEIGHT = 704; // 2560 / [design canvas width] * [design banner height]
	}
