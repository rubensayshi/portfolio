<?php 

function url($url) 
{
	if ($url == 'index') {
		$url = '';
	}
	
	return "/{$url}";
}

function asset($asset)
{
	return url($asset);
}