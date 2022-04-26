<?php
	
	use Controller\NotFoundController;
	use Controller\RedirectController;
	use Controller\RootController;

	
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/scripts-includes/universal.php';

	$url = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");
	$redirect = Redirect::loadForUrl($url);
	
	// There's a redirect, follow it instead
	if(!$redirect->isNull())
	{
		$url = $redirect->getRedirectUrl($url);
		RedirectController::redirect($url, false);
		exit;
	}

	if($url === "")
	{
		(new RootController())->output();
	}
	else
	{
		$parser = RootController::getControllerFor(explode("/", $url));

		if($parser === null)
		{
			(new NotFoundController())->output();
		}
		else
		{
			$parser->output();
		}
	}