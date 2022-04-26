<?php
	
	use Controller\NotFoundController;
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/scripts-includes/site-data.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/scripts-includes/universal.php';
	
	(new NotFoundController())->output();