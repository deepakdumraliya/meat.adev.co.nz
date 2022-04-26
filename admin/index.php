<?php
	
	use Admin\AccessController;
	use Admin\AdminController;
	use Configuration\Registry;
	use Controller\NotFoundController;
	use Controller\RedirectController;
	use Users\Administrator;
	use Users\SuperAdministrator;
	use Users\User;
	
	require_once __DIR__ . "/scripts-includes/universal.php";
	
	const DEVELOPER_IPS = ['114.23.110.149'];
	const AUTO_LOGIN = true;
	
	$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
	$ipAddress = $_SERVER['REMOTE_ADDR'];
	$dbAccess = false;
	
	$fullPath = $_SERVER["DOCUMENT_ROOT"] . $path;
	
	$isPmaPath = strpos($path, "/admin/pma/") === 0;
	$isAdmPath = strpos($path, "/admin/adm/") === 0;
	$isDbPath = $isPmaPath || $isAdmPath;
	
	if(in_array($ipAddress, DEVELOPER_IPS))
	{
		if($isDbPath)
		{
			$dbAccess = true;
		}
		else if(AUTO_LOGIN)
		{
			User::set(User::load(Administrator::ACTIVATE_ID));
		}
	}
	
	if(!$isDbPath && (!file_exists(DOC_ROOT . $path) || is_dir(DOC_ROOT . $path)))
	{
		// array_slice(), since we don't want the first "admin" segment.
		$segments = array_slice(explode("/", trim($path, "/")), 1);
		
		if(count($segments) === 0)
		{
			RedirectController::redirect(Registry::getDefaultView());
			exit;
		}
		
		$controller = AdminController::getControllerFor($segments);
		
		if($controller === null)
		{
			$controller = new NotFoundController();
		}
		
		$controller->output();
	}
	else if($isDbPath && !$dbAccess && !User::get() instanceof SuperAdministrator)
	{
		(new AccessController("You do not have access to the database"))->output();
	}
	else
	{
		if(strpos($fullPath, ".php") === false)
		{
			$fullPath = rtrim($fullPath, "/") . "/index.php";
		}
		
		chdir(dirname($fullPath));
		$_SERVER["PHP_SELF"] = $_SERVER["REQUEST_URI"];
		
		if($isDbPath)
		{
			session_write_close();
		}
		
		/** @noinspection PhpIncludeInspection */
		include($fullPath);
	}