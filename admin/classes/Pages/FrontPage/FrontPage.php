<?php
	namespace Pages\FrontPage;

	use Core\Elements\Editor;
	use Core\Elements\GeneratorElement;
	use Core\Elements\ImageElement;
	use Core\Elements\Text;
	use Core\Elements\Checkbox;
	use Core\Properties\Property;
	use Core\Attributes\Data;
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
		#[Data("displaycategory")]
		public bool $displayCategory = false;
		
		/**
		 * properties
		 *
		 * @return void
		 */
		protected static function properties()
		{
			parent::properties();
			static::addProperty(new Property('bannerText', 'banner_text', 'html'));
			static::addProperty(new Property('displayCategory', 'displaycategory', 'bool'));
			static::addProperty(new Property('CategoryTitle', 'CategoryTitle', 'html'));
			static::addProperty(new Property('CategoryDesc', 'categoryDescription', 'html'));
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
			$this->addElement(new Checkbox("displayCategory", 'Display Category'), "Category");
			$this->addElement(new Text("CategoryTitle", 'Category Block Title'), "Category");
			$this->addElement(new Editor("CategoryDesc", 'Display Category'), "Category");
		}
	}
