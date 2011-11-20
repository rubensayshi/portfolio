<?php 

/**
 * helper function to create an internal URL
 * curently it just prefixes the URL with a / but this should become more advanced if the project would need to run in a subdirectory
 * 
 * @param	string		$url			input url, should be relative to the webroot
 * @return	string						output url
 */
function url($url) 
{
	if ($url == 'index') {
		$url = '';
	}
	
	return "/{$url}";
}

/**
 * helper function to create an internal URL to an asset
 * curently uses the url() function but this should be build into something with versioned asset URLs
 * 
 * @param	string		$asset			input url, should be relative to the webroot or absolute
 * @return	string						output url
 */
function asset($asset)
{	
	$asset = str_replace(getWebroot().'/', '', $asset);
	
	return url($asset);
}

/**
 * get the webroot (full) path
 * 
 * @return		string
 */
function getWebroot()
{
	static $webroot;
	
	if (is_null($webroot)) {
		$webroot = dirname(dirname(__FILE__)) . '/httpdocs';
	}
	
	return $webroot;
}