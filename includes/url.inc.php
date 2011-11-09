<?php 

function url($url) 
{
	if ($url == 'index') {
		$url = '';
	}
	
	return "/{$url}";
}