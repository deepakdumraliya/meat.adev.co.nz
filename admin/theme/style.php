<?php
	use Sass\CustomCompiler;
	use Sass\MappingServer;
	
	require_once($_SERVER["DOCUMENT_ROOT"] . "/admin/scripts-includes/universal.php");
	
	$server = new MappingServer(__DIR__);
	$server->serve();