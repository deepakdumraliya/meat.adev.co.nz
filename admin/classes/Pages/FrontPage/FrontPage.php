<?php
	namespace Pages\FrontPage;

	use Core\Elements\Editor;
	use Core\Elements\GeneratorElement;
	use Core\Elements\ImageElement;
	use Core\Elements\Text;
	use Core\Properties\ImageProperty;
	use Core\Properties\LinkFromMultipleProperty;
	use Core\Properties\Property;
	use Files\Image;
	use Pages\Page;

	/**
	 * The main page for the site, usually the homepage
	 */
	class FrontPage extends Page
	{
		/*~~~~~
		 * setup
		 **/

		// Page
		const BANNER_CLASS = FrontPageBanner::class;

		const TABLE = 'front_page';
		public $banner_text = '';
		
		/**
		 * properties
		 *
		 * @return void
		 */
		protected static function properties()
		{
			parent::properties();
			static::addProperty(new Property('bannerText', 'banner_text', 'html'));
		}	
		/**
		 * elements
		 *
		 * @return void
		 */
		protected function elements()
		{

			parent::elements();
			//upcoming event 
			//$this->addElement(new Text("upcomingeventTitle", "Title"), 'Upcoming Event');
			$this->addElement(new Editor('bannerText', 'Banner Text'), 'Banners');
		}
	}
