<?php 

$rootDir	= dirname(dirname(__FILE__));
$pages		= array(
	'index',
	'aboutme',
);

$url		= explode("/", $_SERVER['REQUEST_URI']);

var_dump($url);