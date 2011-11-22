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
require "{$incDir}/templates.inc.php";
require "{$incDir}/class/PortfolioHelper.php";

/*
 * if ?printpdf=1 isset then ?pdf=1 should also be set
 */
if (isset($_GET['printpdf'])) {
	$_GET['pdf'] = $_GET['printpdf'];
}

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
	$page['content'] = require $pageFile;
} else if (($pageFile = "{$pageDir}/{$page['page']}.html") && file_exists($pageFile)) {
	$page['content'] = file_get_contents($pageFile);
}

/*
 * include the wrapper template which gets all the variable defined in our current scope
 * and can build up the page using $pages and $page
 */
$tpl = isset($_GET['pdf']) ? 'pdf_wrapper' : 'wrapper';
echo render($tpl, array(
	'page'			=> $page,
	'pages'			=> $pages,
));
