<?php
	namespace Pages\FrontPage;

	use Pages\PageController;
	use Products\ProductCategory;
	/**
	 * A FrontPage Controller loads anything extra needed for the front page
	 */
	class FrontPageController extends PageController
	{
		/**
		 * Sets the variables that the template has access to
		 * @return	array	An array of [string => mixed] variables that the template has access to
		 */
		protected function getTemplateVariables()
		{
		$variables = parent::getTemplateVariables();
		$variables["catNavItems"] = ProductCategory::getTopLevelCats();
		return $variables;
		}
	}
