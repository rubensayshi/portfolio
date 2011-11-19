<?php 

/**
 * all the available pages in our website
 * each should at least have a 'page' which matches a page in the `pages` directory and a 'title' for the <title> and to display in the menu
 * 
 * @var	array[array]
 */
$pages		= array(
	'index'		=> array(
		'page'		=> 'index',
		'title'		=> 'Hello!',
	),
	'aboutme'	=> array(
		'page'		=> 'aboutme',
		'title'		=> 'About Me',
	),
	'resume'	=> array(
		'page'		=> 'resume',
		'title'		=> 'Resume',
	),
	'projects'	=> array(
		'page'		=> 'projects',
		'title'		=> 'Projects',
	),
	'portfolio'	=> array(
		'page'		=> 'portfolio',
		'title'		=> 'Portfolio',
	),
	'blog'		=> array(
		'page'		=> 'blog',
		'title'		=> 'Blog',
	),
	'aboutsite'	=> array(
		'page'		=> 'aboutsite',
		'title'		=> 'About This Site',
	),
);

/*
 * loop over the $pages array to ensure it's valid 
 * and posibly add some defaults or other magic which makes my life easier when defining the array
 */
foreach ($pages as $url => $page) {
	if (!isset($page['page'])) {
		unset($pages[$url]);
		continue;
	}
	
	if (!isset($page['url'])) {
		$page['url'] = $url;
	}
	
	$page['active'] = false;
	
	$pages[$url] = $page;
}

/*
 * handlle the REQUEST_URI and break it down into something we can match against our $pages
 */
$url		= explode("/", $_SERVER['REQUEST_URI']);
$url		= array_values(array_filter($url));
$first		= strtolower(isset($url[0]) ? $url[0] : '');
$default	= 'index';

/*
 * $page will become a reference to the entry in $pages which is the curently active page
 */
$page		= false;

/*
 * if we can find the $first part of the url as a key in our $pages then we have match
 */
if (!$page && isset($pages[$first])) {
	$page = &$pages[$first];
}

/*
 * if we haven't found a matching $page yet then use the $default
 */
if (!$page && isset($pages[$default])) {
	$page = &$pages[$default];
}

/*
 * if we still don't have a matching $page then something is really messed up
 */
if (!is_array($page)) {
	echo "Failed!";
	exit;
}

/*
 * set 'active' for our curently active $page
 */
$page['active']	= true;
