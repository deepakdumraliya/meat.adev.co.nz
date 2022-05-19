<?php
	namespace Pages\FrontPage;

	use Core\Elements\Editor;
	use Core\Elements\ImageElement;
	use Core\Elements\Text;
	use Core\Elements\Checkbox;
use Core\Elements\Textarea;
use Core\Elements\Url;
use Core\Properties\Property;
	use Core\Properties\ImageProperty;
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

			static::addProperty(new Property('display_Category', 'displaycategory', 'bool'));
			static::addProperty(new Property('category_Title', 'CategoryTitle', 'string'));
			static::addProperty(new Property('category_Desc', 'categoryDescription', 'html'));
			//premium
			static::addProperty(new Property('premiumMeatContent', 'meatcontent', 'html'));
			static::addProperty(new ImageProperty('meatImage', 'meatimage', Page::IMAGE_LOCATION, 1204, 670, ImageProperty::SCALE));
			static::addProperty(new Property('premiumTitle', 'premiumtitle', 'string'));
			static::addProperty(new Property('premiumUrl', 'premiumlink', 'string'));
			static::addProperty(new Property('findMoretitle', 'premiumlinklabel', 'string'));

			
			// static::addProperty(new Property('testimonialContent', 'testimonialcontent', 'html'));
			// static::addProperty(new ImageProperty('testimonialImage', 'testimonialimage', Page::IMAGE_LOCATION, 1204, 670, ImageProperty::SCALE));
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

			$this->addElement(new Checkbox("display_Category", 'Display Category'), "Category");
			$this->addElement(new Text("category_Title", 'Category Block Title'), "Category");
			$this->addElement(new Editor("category_Desc", 'Display Category'), "Category");
		// meat
			$this->addElement(new Text("premiumTitle", 'Title'), "Premium");
			$this->addElement(new Textarea("premiumMeatContent", 'Content'), "Premium");
			$this->addElement(new Url("premiumUrl", 'URL'), "Premium");
			$this->addElement(new Text("findMoretitle", 'Find More Title'), "Premium");
			$this->addElement((new ImageElement('meatImage', 'Image')), 'Premium')->addClass('half');
			// //testimonial section
			// $this->addElement(new Editor("testimonialContent", 'Content'), "Chefs’ Testimonials");
			// $this->addElement((new ImageElement('testimonialImage', 'Image')), 'Chefs’ Testimonials')->addClass('half');
			

		}
	}
