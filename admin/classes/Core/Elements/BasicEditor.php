<?php
	namespace Core\Elements;
	
	use Core\Elements\Base\BasicElement;
	
	/**
	 * A basic TinyMCE editor, with only minimal formatting options
	 */
	class BasicEditor extends BasicElement
	{
		/**
		 * Gets the path to the component for this element, relative to /admin/theme/components/elements/
		 * @return    string    The vue template
		 */
		public function getTemplate(): string
		{
			return "editor/BasicEditor.js";
		}
	}