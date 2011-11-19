<?php 
/**
 * @file
 * 
 * this is the front controller for the application
 * all non-static requests should go through this
 */


/*
 * setup some initial vars for bootstrapping
 */
$rootDir	= dirname(dirname(__FILE__));
$pageDir	= "{$rootDir}/pages";
$incDir		= "{$rootDir}/includes";
$baseUrl	= (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'www.unknown-host.com');
$env		= preg_match("/(www\.)?rubensayshi\.com$/", $baseUrl) ? 'prod' : 'dev';

/*
 * require some helper functions
 */
require "{$incDir}/url.inc.php";

/*
 * require page bootstrap process
 * this will setup the following vars
 * 
 * @var	$pages	array[array]	all the pages 
 * @var	$page	array			the active page
 */
require "{$incDir}/bootstrap.inc.php";

/*
 * atempt to find a file which we can include (php) or read (html) to handle the page request 
 */
if (($pageFile = "{$pageDir}/{$page['page']}.php") && file_exists($pageFile)) {
	ob_start();

	require $pageFile;

	$page['content'] = ob_get_clean();
} else if (($pageFile = "{$pageDir}/{$page['page']}.html") && file_exists($pageFile)) {
	$page['content'] = file_get_contents($pageFile);
}

/*
 * include the wrapper template which gets all the variable defined in our current scope
 * and can build up the page using $pages and $page
 */
require "{$pageDir}/wrapper.php";