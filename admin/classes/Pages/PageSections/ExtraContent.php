<?php
	namespace Pages\PageSections;
	
	use Core\Attributes\Data;
	use Core\Elements\Editor;
	use Core\Generator;
	
	/**
	 * An extra piece of content to be displayed after some other content
	 */
	class ExtraContent extends Generator implements PageSection
	{
		const TABLE = "extra_contents";
		const ID_FIELD = "extra_content_id";
		
		#[Data("content", "html")]
		public string $content = "";
		
		protected function elements()
		{
			parent::elements();
			
			$this->addElement(new Editor("content", "Content"));
		}
		
		//region PageSection
		
		public function getTemplateLocation(): string
		{
			return "pages/sections/extra-content.twig";
		}
		
		//endregion
	}