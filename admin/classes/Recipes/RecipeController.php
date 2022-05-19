<?php

namespace Recipes;

use Pages\PageController as PagesPageController;

/**
 * Controls the resource pages 
 */

class RecipeController extends PagesPageController
{
    /**
     * Sets the variables that the template has access to
     * @return	array	An array of [string => mixed] variables that the template has access to
     */
    protected function getTemplateVariables()
    {
        $variables = parent::getTemplateVariables();
        $category = isset($_GET['cat']) ? $_GET['cat'] : "";
        $variables['category'] = RecipeCategory::loadAllFor('active', true, ['position' => true]);
        $variables['curcat'] = $category;
        $variables['recipes'] = Recipe::getfilteredrecipe($category);

        return $variables;
    }
}
