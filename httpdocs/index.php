<?php 

$rootDir	= dirname(dirname(__FILE__));
$pageDir	= "{$rootDir}/pages";
$incDir		= "{$rootDir}/includes";
$baseUrl	= (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'www.unknown-host.com');
$env		= preg_match("/(www\.)?rubensayshi\.com$/", $baseUrl) ? 'prod' : 'dev';

require "{$incDir}/page.inc.php";
require "{$incDir}/url.inc.php";

$content		= false;
if (($pageFile = "{$pageDir}/{$page['page']}.php") && file_exists($pageFile)) {
	ob_start();

	require $pageFile;

	$page['content'] = ob_get_clean();
} else if (($pageFile = "{$pageDir}/{$page['page']}.html") && file_exists($pageFile)) {
	$page['content'] = file_get_contents($pageFile);
}

require "{$pageDir}/wrapper.php";