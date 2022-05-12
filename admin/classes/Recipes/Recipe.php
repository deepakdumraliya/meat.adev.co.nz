<?php

namespace Recipes;

use Admin\AdminNavItem;
use Admin\AdminNavItemGenerator;
use Configuration\Registry;
use Core\Attributes\Data;
use Core\Columns\PropertyColumn;
use Core\Properties\ImageProperty;
use Core\Properties\Property;
use Core\Elements\Editor;
use Core\Elements\Text;
use Core\Elements\ImageElement;
use Core\Generator;
use JsonSerializable;


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
    #[Data("r_id")]
    public int $recipe_id = 0;
    // Associate the $name property with the "name" field in the database
    #[Data("title")]
    public string $title = "";

    // Associate the $description property with the "description" field in
    // the database. This field stores HTML, so it needs to be set to the
    // "html" type, otherwise it defaults to a normal string, which has
    // HTML tags stripped out of it
    #[Data("content", "html")]
    public string $content = "";

    #[Data("image", "image")]
    public $image = null;

    public bool $active = true;

    const IMAGE_LOCATION = DOC_ROOT . "/resources/images/recipe/";
    const IMAGE_WIDTH = 768;
    const IMAGE_HEIGHT = 482;
    const IMAGE_RESIZE_TYPE = ImageProperty::SCALE;

    /**
     * Sets the array of Columns that are displayed to the user for this
     * object type
     */
    protected static function columns()
    {
        static::addColumn(new PropertyColumn('recipetitle', 'Title'));

        parent::columns();
    }
    /**
     * Gets the array of Properties that determine how this Object interacts with the database
     */
    protected static function properties()
    {
        parent::properties();
        static::addProperty((new Property('recipetitle', 'title', 'string'))->setIsSearchable(true));
        static::addProperty((new Property('recipecontent', 'content', 'html'))->setIsSearchable(true));
        static::addProperty(new ImageProperty('reciepeImage', 'image', static::IMAGE_LOCATION, static::IMAGE_WIDTH, static::IMAGE_HEIGHT, static::IMAGE_RESIZE_TYPE));
        static::addProperty(new Property('active', 'active', 'bool'));
    }

    /**
     * Sets the Form Elements for this object
     */
    protected function elements()
    {
        parent::elements();

        $this->addElement(new Text("recipetitle", "Name"), 'Recipe');
        $this->addElement(new Editor("recipecontent", "Description"), 'Recipe');
        $this->addElement((new ImageElement('reciepeImage', 'Image')), 'Recipe')->addClass('half');
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
