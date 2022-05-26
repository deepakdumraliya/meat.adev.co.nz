<?php

namespace Recipes;

use Admin\AdminNavItem;
use Admin\AdminNavItemGenerator;
use Configuration\Registry;
use Core\Attributes\Data;
use Core\Attributes\ImageValue;
use Core\Columns\PropertyColumn;
use Core\Properties\ImageProperty;
use Core\Properties\Property;
use Core\Elements\Editor;
use Core\Elements\Text;
use Core\Elements\ImageElement;
use Core\Elements\Textarea;
use Core\Generator;
use JsonSerializable;
use Core\Attributes\LinkTo;
use Core\Elements\Select;



/**
 * A single eventlist to keep track of
 */
class Recipe extends Generator implements AdminNavItemGenerator, JsonSerializable
{
    // The table to find the event
    const TABLE = "recipes";

    // The name of the primary key field in the database. Should be an
    // auto incrementing integer.
    const ID_FIELD = "r_id";

    // The term to refer a single event
    const SINGULAR = "Recipe";

    // The term to refer to multiple events
    const PLURAL = "Recipes";

    // The name of the property that labels this Event
    const IDENTIFIER_PROPERTY = "title";

    const LABEL_PROPERTY = 'title';
    const IMAGE_CLASS = RecipeImage::class;
    // Associate the $name property with the "name" field in the database
    #[Data("title")]
    public string $title = "";

    // Associate the $description property with the "description" field in
    // the database. This field stores HTML, so it needs to be set to the
    // "html" type, otherwise it defaults to a normal string, which has
    // HTML tags stripped out of it
    #[Data("content", "html")]
    public string $content = "";

    #[Data("ingredients", "html")]
    public string $ingredients = "";

    #[Data("steps", "html")]
    public string $steps = "";
    
    #[ImageValue("image", DOC_ROOT . "/resources/images/recipe/", 995, 627, ImageValue::SCALE)]
    public $image = null;

    #[ImageValue("image1", DOC_ROOT . "/resources/images/recipe/", 995, 627, ImageValue::SCALE)]
    public $image1 = null;

    #[ImageValue("image2", DOC_ROOT . "/resources/images/recipe/", 995, 627, ImageValue::SCALE)]
    public $image2 = null;


    #[Data("active")]
    public bool $active = true;

    #[LinkTo("recipe_category_id")]
    public RecipeCategory $recipeCategory;
    

    /**
     * Sets the array of Columns that are displayed to the user for this
     * object type
     */
    protected static function columns()
    {
        static::addColumn(new PropertyColumn('title', 'Title'));

        parent::columns();
    }

  

    /**
     * Sets the Form Elements for this object
     */
    protected function elements()
    {
        parent::elements();
        parent::elements();
        $this->addElement((new Select(
            "recipeCategory",
            "Recipe Category",
            RecipeCategory::loadOptions()
        ))->addClass('potenztyperecipe'))->addValidation(Select::REQUIRED);
        $this->addElement(new Text("title", "Name"));
        $this->addElement(new Textarea("content", "Description"));
        $this->addElement(new Editor("ingredients", "Ingredients"));
        $this->addElement(new Editor("steps", "Steps"));
        $this->addElement(new ImageElement('image', 'Image'));
        $this->addElement(new ImageElement('image1', 'Image 1'));
        $this->addElement(new ImageElement('image2', 'Image 2'));
    }

    /**
     * getfilteredrecipe
     *
     * @param  mixed $cat_id
     * @return void
     */
    public static function getfilteredrecipe($cat_id = null)
    {
        if (empty($cat_id)) {
            return Recipe::loadAllFor('active', true, ['position' => true]);
        } else {
            $query = "SELECT ~PROPERTIES "
            . "FROM ~TABLE "
            . "WHERE ~active = true "
            . "AND ~recipeCategory = ? ";


            return static::makeMany($query, [$cat_id]);
        }
    }
    
    /**
     * getRecipeById
     *
     * @param  mixed $id
     * @return void
     */
    public static function getRecipeById($id = null){
        $query = "SELECT ~PROPERTIES "
            . "FROM ~TABLE "
            . "WHERE ~active = true "
            . "AND r_id = ? ";


        return static::makeOne($query, [$id]);
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
                static::class, Recipe::class
            ],
            Registry::RECIPES
        );
    }
}
