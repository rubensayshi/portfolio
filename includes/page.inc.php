<?php 

$pages		= array(
	'index'		=> array(
		'page'		=> 'index',
		'title'		=> 'AboutMe',
	),
	'resume'	=> array(
		'page'		=> 'resume',
		'title'		=> 'Resume',
	),
	'blog'		=> array(
		'page'		=> 'blog',
		'title'		=> 'Blog',
	),
	'projects'	=> array(
		'page'		=> 'projects',
		'title'		=> 'Projects',
	),
);

foreach ($pages as $url => $page) {
	if (!isset($page['url'])) {
		$page['url'] = $url;
	}
	
	$page['active'] = false;
	
	$pages[$url] = $page;
}

$url		= explode("/", $_SERVER['REQUEST_URI']);
$url		= array_values(array_filter($url));

$page		= false;
$first		= strtolower($url[0]);

$page		= false;
$default	= 'index';

if (!$page && isset($pages[$first])) {
	$page = &$pages[$first];
}

if (!$page && isset($pages[$default])) {
	$page = &$pages[$default];
}

if (!is_array($page)) {
	echo "Failed!";
	exit;
}

$page['active']	= true;
