<?php
	/**
	 * generate xml sitemap on demand
	 * sitemap.xml is redirected here via .htaccess
	 */
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/scripts-includes/universal.php';
	// still creating a physical file so we can pull it from the server for examination or in case
	// .htaccess redirect gets broken there will still be something there.
	createXmlSitemap();

	header('Content-Type: application/xml');
	readfile(DOC_ROOT . '/sitemap.xml');
	exit;