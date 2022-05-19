<?php

namespace Recipes;

use Core\Attributes\LinkFromMultiple;
use Core\Columns\PropertyColumn;
use Core\Properties\Property;
use Core\Elements\Text;
use Core\Generator;
use Admin\AdminNavItem;
use Configuration\Registry;
use Core\Attributes\Data;

/**
 * Contains a group of stockists
 */
class RecipeCategory extends Generator
{
    const SINGULAR = "Recipe Category";
    const PLURAL = "Recipe Categories";
    const TABLE = "recipe_categories";
    const ID_FIELD = "recipe_category_id";
    const LABEL_PROPERTY = "recipeType";

    // The term to refer to a single object in this category (a single
    // stockist)
    const SUBITEM_SINGULAR = "Recipe";

    // The term to refer to multiple objects in this category (multiple
    // stockists)
    const SUBITEM_PLURAL = "Recipes";

    #[Data("recipe_type")]
    public string $recipeType = "";
    #[Data("active")]
    public bool $active = true;

    // // Associate the $stockists property with any Stockist object whose
    // // $stockstCategory property links to this StockistCategory
    /** @var recipeists[] */
    #[LinkFromMultiple(Recipe::class, "recipeCategory")]
    public array $recipeists = array();

    protected static function columns()
    {
        static::addColumn(new PropertyColumn('recipeType', 'Recipe Category'));
        parent::columns();
    }


    /**
     * Gets the array of Properties that determine how this Category interacts with the database
     */
    // protected static function properties()
    // {
    //     parent::properties();

    //     static::addProperty(new Property("recipeType", "recipe_type", "string"));
    // }

    protected function elements()
    {
        parent::elements();
        $this->addElement(new Text('recipeType', 'Recipe Type'), 'Category');
    }

    /**
     * Gets the nav item for this class
     * @return	AdminNavItem	The admin nav item for this class
     */
    public static function getAdminNavItem()
    {
        return new AdminNavItem(
            static::getAdminNavLink(),
            static::PLURAL,
            [
                static::class, RecipeCategory::class
            ],
            Registry::RECIPECATEGORY
        );
    }
}
