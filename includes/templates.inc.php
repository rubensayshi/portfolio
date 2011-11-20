<?php 

function render($template, array $vars = array())
{
	$file = get_template_path($template);
	
	extract($vars);
	
	ob_start();
	
	include $file;
	
	return ob_get_clean();
}

function get_template_path($template)
{
	$dir	= "{$GLOBALS['rootDir']}/templates";
	$path	= "{$dir}/{$template}";
	
	if (!preg_match("/\..{1,4}$/", $template)) {
		$path .= ".tpl.php";
	}
	
	if (!file_exists($path)) {
		throw new Exception("Failed to find template [{$template}] -> [{$path}]");
	}
	
	return $path;
}