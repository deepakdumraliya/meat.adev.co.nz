<?php
	/******
	 * Global functions file
	 * @version 0.9
	 * @author  Robert Urquhart <programmer@activatedesign.co.nz>
	 * @package WEP-CMS
	 **/

	use Configuration\Configuration;
	use Configuration\Registry;
	use Core\Entity;
	use Core\Generator;
	use Database\Database;
	use Template\NavItem;

	/**

	 * clean data of html tags eg script and escape for database entry
	 * @param $input
	 * @return string
	 */
	function cleanHtmlData($input)
	{
		return htmlentities(trim($input), ENT_QUOTES, 'UTF-8', false);
	}


	/**
	 * Validate email address, exclude local email addresses (eg @localhost - see {@link http://nz.php.net/manual/en/filter.filters.validate.php })
	 * backported (direct replacement) WEP3 version 2012-12-10
	 * @param string $email address to check
	 * @return bool
	 */
	function isEmail($email)
	{
		// Make sure there is at least one '.' after the @
		return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.*\..*$/', $email);

	}

	/*****
	 * SCRIPT HANDLING FUNCTIONS
	 **/





	
	/**
	 * Format float to price for display, usually going into a string so return rather than echo
	 * @var float $price ;
	 * @return string
	 */
	function formatPrice($price)
	{
		return '$' . number_format($price, 2);
	}

	/**
	 * update global message from wherever
	 * @param string $append
	 *
	 * @return void
	 */
	function addMessage($append = '')
	{
		// make sure the variable exists, so we don't generate a PHP Warning
		if(!isset($_SESSION['message']))
		{
			$_SESSION['message'] = '';
		}

		// add new message
		if($append != '')
		{
			$_SESSION['message'] .= $append . '<br />';
		}

		return;
	}

	/**
	 * get global message stored in session and clear
	 *
	 * @return string;
	 */
	function outputMessage()
	{
		$text = '';
		if(isset($_SESSION['message']))
		{
			$text = $_SESSION['message'];
			unset($_SESSION['message']);
		}

		return $text;
	}

	/**

	 * recursively delete all files and sub-directories in a directory
	 * @param string $path   directory path
	 * @param bool   $self delete this directory as well as contents?
	 * @return bool
	 */
	function recursiveDelete($path, $self = false)
	{
		global $message;
		//$message .= $self ? 'self true <br />' : 'self false <br />';
		/*
		 * remove trailing slash if present
		 */
		$path = rtrim($path, '/');

		if($path == DOC_ROOT)
		{
			$message .= "WARNING: cannot delete root directory";

			return false;
		}
		/**
		 * check valid directory, empty
		 * @var resource $do open directory
		 */
		if($path && is_dir($path))
		{
			$do = opendir($path);
			while(($i = readdir($do)) !== false)
			{
				if($i == "." || $i == "..")
				{
				} // do nothing
				elseif(is_dir("$path/$i"))
				{
					recursiveDelete("$path/$i");
					rmdir("$path/$i");
				}
				else
				{
					unlink("$path/$i");
				}
			}
			closedir($do);

			if($self)
			{
				rmdir("$path");

				return true;
			}
		}

		//else
		return false;
	}

	/**
	 * MISCELLANEOUS
	 */
	
	/**
	 * detect an ajax request
	 * @return bool
	 */
	function isAjaxRequest()
	{
		return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
	}

	/**
	 * create a basic xml sitemap of pages, product categories and products, and other modules as defined in site
	 *
	 *
	 * @todo just move into \Registry?
	 * @return int  the number of links in the sitemap
	 */
	function createXmlSitemap()
	{
		/**
		 * @var SimpleXmlElement $urlset
		 * @var string[]         $urls
		 * @var string           $path an individual url
		 * @var SimpleXmlElement $url  a single node ot type 'url'
		 * @var SimpleXMLElement $loc  a single node of type 'loc'
		 */
		$urlset = new SimpleXmlElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

		/*
		 * work through the list of modules checking for url method (just in case) and adding <url><loc> nodes
		 * for the returned list of urls
		 */

		/** @var Entity|string $className */
		foreach(Registry::SITEMAP_CLASSES as $className)
		{
			if(method_exists($className, 'getSitemapUrls'))
			{
				$urls = $className::getSitemapUrls();

				if($urls)
				{
					foreach($urls as $path)
					{
						$url = $urlset->addChild('url');
						$url->addChild('loc', PROTOCOL . SITE_ROOT . $path);
					}
				}
			}
		}

		/**
		 * finish it off and write to file
		 *
		 * @var string $xml
		 */
		$xml = (string) $urlset->asXML();
		$xml = substr_replace($xml, '<?xml version="1.0" encoding="UTF-8"?>', 0, strlen('<?xml version="1.0"?>'));
		file_put_contents(DOC_ROOT . '/sitemap.xml', $xml);

		return $urlset->children()->count();
	}

	/**
	 * Checks if a specific nav item generator is selected
	 * @param	Generator	$generator			The generator to check, must be an instance of NavItem
	 * @param	NavItem		$currentNavItem		The NavItem to check against
	 * @return	bool							Whether it's selected
	 */
	function isGeneratorSelected(Generator $generator, NavItem $currentNavItem = null)
	{
		if(!$generator instanceof NavItem)
		{
			throw new Error("Generator must implement NavItem");
		}
		
		if($currentNavItem instanceof Generator && $currentNavItem instanceof $generator && $currentNavItem->id === $generator->id)
		{
			return true;
		}
		else
		{
			foreach($generator->getChildNavItems() as $child)
			{
				if($child->isNavSelected($currentNavItem))
				{
					return true;
				}
			}
		}
		
		return false;
	}
	
		
	/**
	 * @template	T of Generator
	 * @param 	T[] $generators to filter
	 * @return 	T[] only active Generators
	 */
	function filterActive($generators): array
	{
		// could use filterOnProperty($generators, 'active', true)
		return array_filter($generators, function($item)
		{
			return $item->active;
		});
	}
	
	/**
	 * @param 	Generator[] $generators to filter
	 * @param 	string 		$property name
	 * @param 	mixed		$values what are we looking to match
	 * @return 	Generator[] only active Generators
	 */
	function filterOnProperty($generators, $property, $values): array
	{
		if(!is_array($values))
		{
			$values = [$values];
		}
		
		return array_filter($generators, function($item) use ($property, $values)
		{
			return in_array($item->$property, $values, true);
		});
	}
	
	/**
	 * capture information to a log file, usually for debugging purposes
	 * note if you are wanting to write to a more specific directory make sure that directory is created first.
	 */
	function writeLog($contents, $logFile = '')
	{
		if($logFile == '')
		{
			$logFile = DOC_ROOT . '/admin/logs/log-' . date('Y-m-d') . '.log';
		}
		elseif(strpos($logFile, DOC_ROOT) !== 0)
		{
			$logFile = DOC_ROOT . '/admin/logs/' . $logFile;
		}
		
		file_put_contents($logFile, date('Y-m-d H:i:s') . ' '. $contents . "\n", FILE_APPEND);
	}
	
	/**
	 * Insert an item or items into an associative array at a particular point
	 * @template	T										The type of object the arrays contain
	 * @param		array<string, T>	$associativeArray	The array to insert things into
	 * @param		array<string, T>	$insert				The items to insert
	 * @param		string|null			$before				The key to insert the items before, or null to insert them at the end
	 * @throws		Exception								If $before is not null, and it doesn't exist in the array
	 */
	function mergeAssociative(array $associativeArray, array $insert, ?string $before): array
	{
		if($before !== null && !array_key_exists($before, $associativeArray))
		{
			throw new Exception("Key '{$before}' does not exist in the original array");
		}
		
		$newArray = [];
		
		// Create a function, so we don't have to write this twice
		$addInsert = function() use(&$newArray, $insert)
		{
			array_walk($insert, function($value, $key) use(&$newArray) { $newArray[$key] = $value; });
		};
		
		// Iterate over all the values in the original array, adding them to the new array
		foreach($associativeArray as $key => $value)
		{
			// If we reach the key we need to be inserting before, add all the items from the insertion array
			if($key === $before)
			{
				$addInsert();
			}
			
			$newArray[$key] = $value;
		}
		
		// If we're inserting the items at the end, do this now
		if($before === null)
		{
			$addInsert();
		}
		
		return $newArray;
	}