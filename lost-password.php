<?php
	use Pages\PageTypeController;

	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/scripts-includes/site-data.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/scripts-includes/universal.php';

	(new PageTypeController("Password"))->output();
