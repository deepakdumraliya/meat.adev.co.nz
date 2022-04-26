# WEP-CMS

This is the framework for all Activate's websites. It uses a custom ORM system for easily generating custom functionality. It requires Apache, PHP 8.0 and any recent variant of MySQL or MariaDB.

Current version: **4.22.1**

## Setup

Setting up from scratch is relatively simple.

1. Upload the package to your host. The root folders starting with an underscore should not be uploaded.
2. Set up a database and import the database found in `_db/db.sql`.
3. Put the database details into the appropriate fields in `/admin/scripts-includes/site-data.php`.

Most native settings can currently be found in `/admin/scripts-includes/universal.php`. Make sure you change the default email addresses to your own, to avoid test emails being sent to the default developer.

## Code Examples

The following are examples of a basic parent-child relationship between a `Products\ProductCategory` which extends the `Core\Generator` class and a `Products\Product` which also extends the `Core\Generator` class.

### ProductCategory.php

```
#!php
<?php
	namespace Products;
	
	use Core\Columns\PropertyColumn;
	use Core\Generator;
	use Core\Properties\Property;
	use Core\Properties\LinkFromMultipleProperty;
	
	/**
	 * A Category contains several products
	 * @author	John Doe <john.doe@example.com>
	 */
	class ProductCategory extends Generator
	{
		// The term to refer a single Product Category
		const SINGULAR = "Category";
		
		// The term to refer to multiple Product Categories
		const PLURAL = "Categories";
		
		// Automated user positioning. Requires an integer 'position' field in the database table
		const HAS_POSITION = true;
		
		// Automated active/inactive toggling. Requires a boolean 'active' field in the database table
		const HAS_ACTIVE = true;
		
		// The table to find Product Categories
		const TABLE = "product_categories";
		
		// The name of the primary key field in the table. Should be an auto incrementing integer.
		const ID_FIELD = "product_category_id";
		
		// A property to automatically generate slugs from. Requires a varchar 'slug' field in the database table
		const SLUG_PROPERTY = "name";
		
		// The property that contains links to the products
		const SUBITEM_PROPERTY = "products";
		
		// The term to refer to a single Product
		const SUBITEM_NAME_SINGULAR = "Product";
		
		// The term to refer to multiple Products
		const SUBITEM_NAME_PLURAL = "Products";
		
		public $name = "";

		/** @var Product[] */
		public $products;
		
		/**
		 * Gets the array of Properties that determine how this Database Object Generator Category interacts with the database
		 */
		protected static function properties()
		{
			parent::properties();
			
			static::addProperty(new Property("name", "name", "string"));
			static::addProperty(new LinkFromMultipleProperty("products", Product::class, "productCategory"));
		}

		protected static function columns()
		{
			static::addColumn(new PropertyColumn("name", "Name"));
		}

		protected function elements()
		{
			parent::elements();

			$this->addElement(new Text("name", "Name"));
		}
	}
```

### Product.php

```
#!php
<?php
	namespace Products;
	
	use Core\Columns\PropertyColumn;
	use Core\Element\Editor;
	use Core\Element\ImageElement;
	use Core\Element\Select;
	use Core\Element\Text;
	use Core\Generator;
	use Core\Property\ImageProperty;
	use Core\Property\LinkToProperty;
	use Core\Property\Property;
	
	/**
	 * A Product has a name, price, description and image
	 * @author	John Doe <john.doe@example.com>
	 */
	class Product extends Generator
	{
		// The table to find Products
		const TABLE = "products";
		
		// The name of the primary key field in the database. Should be an auto incrementing integer.
		const ID_FIELD = "product_id";
		
		// The name of the property pointing to the parent Product Category
		const PARENT_PROPERTY = "productCategory";
		
		// The name of the property pointing to the URL parent Product Category
		const PATH_PARENT = "productCategory";
		
		// A property to automatically generate slugs from. Requires a varchar 'slug' field in the database table
		const SLUG_PROPERTY = "name";
		
		// The term to refer a single Product
		const SINGULAR = "Product";
		
		// The term to refer to multiple Products
		const PLURAL = "Products";
		
		// The name of the property that labels this Product
		const IDENTIFIER_PROPERTY = "name";
		
		const IMAGE_LOCATION = DOC_ROOT . "/resources/images/product/";
		const IMAGE_WIDTH = 800;
		const IMAGE_HEIGHT = 600;
		
		public $name = "";
		public $price = 0;
		public $description = "";
		public $image = null;
		public $productCategory = null;
		
		/**
		 * Gets the array of Properties that determine how this Object interacts with the database
		 */
		protected static function properties()
		{
			parent::properties();
			
			static::addProperty(new Property("name", "name", "string"));
			static::addProperty(new Property("price", "price", "float"));
			static::addProperty(new Property("description", "description", "html"));
			static::addProperty(new ImageProperty("image", "image", static::IMAGE_LOCATION, static::IMAGE_WIDTH, static::IMAGE_HEIGHT));
			static::addProperty(new LinkToProperty("productCategory", "product_category_id", ProductCategory::class));
		}
		
		/**
		 * Sets the array of Columns that are displayed to the user for this object type
		 */
		protected static function columns()
		{
			static::addColumn(new PropertyColumn("name", "Name"));
			
			parent::columns();
		}
		
		/**
		 * Sets the Elements for this object
		 */
		protected function elements()
		{
			parent::elements();
			
			$this->addElement(new Select("productCategory", "Category", ProductCategory::loadNames()));
			$this->addElement(new Text("name", "Name"));
			$this->addElement(new Text("price", "Price \$"));
			$this->addElement(new Editor("description", "Description"));
			$this->addElement(new ImageElement("image", "Image"));
		}
	}
```

## Tests

There are some PHPStan and Peridot tests to make sure the system isn't completely broken. To run the tests, navigate to the tests folder and trigger the tests.

```
#!sh
    cd /PATH_TO_PACKAGE/_tests
    vendor/bin/peridot specs/
    php -d memory_limit=4G vendor/bin/phpstan analyse ../admin/classes --level 2
```

You are encouraged to write tests for any functionality you add to the code and these tests will be automatically run by BitBucket when you push to the repository. 

## Pull Requests

Bug fixes and pull requests should be made to the `develop` branch. Once a week, we review these changes and then merge them into `release`. Do not commit directly to the `release` branch, BitBucket will reject any attempts to modify that branch directly.
