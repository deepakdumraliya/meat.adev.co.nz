<?php
	# DEBUGGING
	
	// Detects the site is currently on a dev domain. Usually used for emails, so we don't risk accidentally sending testing emails to clients or customers.
	define('IS_DEV_SITE', (preg_match("/.*\\.(activatedev|adev)\\.co\\.nz/", $_SERVER['HTTP_HOST'] ?? "") !== 0));
	
	// Whether the current user is calling from the developer's IP address. Useful for displaying debugging messages to just the developer on a live site.
	define('IS_DEBUG_IP', ($_SERVER['REMOTE_ADDR'] ?? "") === '114.23.110.149');
	
	# GOOGLE API
	
	// Google API credentials
	// Generate site-specific API codes at https://console.developers.google.com/apis/credentials?project=activatedesign.co.nz:api-project-681176468897
	// API documentation at https://developers.google.com/maps/documentation/javascript/tutorial
	// By default, this is used by google-maps.js and auto-address.js
	const GOOGLE_MAPS_API = "";

	# INTERNALS
	
	// Required since PHP 5.4
	date_default_timezone_set('Pacific/Auckland');
	
	// Auto include files from Composer
	require $_SERVER["DOCUMENT_ROOT"] . "/admin/vendor/autoload.php";
	
	// Auto include our own classes
	spl_autoload_register(function($class)
	{
		$segments = explode("\\", $class);
		$segments[count($segments) - 1] = $segments[count($segments) - 1] . ".php";
		$path = __DIR__ . "/../classes/" . implode("/", $segments);
		
		if(is_file($path))
		{
			/** @noinspection PhpIncludeInspection */
			include_once $path;
		}
	});

	// The current protocol we're using (http:// or https://)
	define('PROTOCOL', 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) ? 's' : '') . '://');

	// Include site data (site name and database details) and functions
	require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/scripts-includes/site-data.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/scripts-includes/functions.php';

	# SESSIONS
	
	// Create a folder to store session data in, if it doesn't exist
	if(!file_exists("/tmp/wep/"))
	{
		mkdir("/tmp/wep/", 0755, true);
	}

	// Make sure that sessions don't expire too quickly.
	ini_set('session.gc_maxlifetime', 12 * 60 * 60); // 12 hours
	ini_set("session.save_path", "/tmp/wep/"); // Store sessions in /tmp/wep/

	// So we can be sure $_SESSION is always available
	session_start();