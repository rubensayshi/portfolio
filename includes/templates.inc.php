<?php 

/**
 * render a template file, using the vars supplied
 * 
 * @param	string		$template				template file can be withouth the extension and should be relative to the templates dir
 * @param	array		$vars
 * @return	string
 */
function render($template, array $vars = array())
{
	$file = get_template_path($template);
	
	extract($vars);
	
	ob_start();
	
	include $file;
	
	return ob_get_clean();
}

/**
 * determine the real path of the template file
 * 	adds an extension if required
 * 	fixes the relative path
 * 
 * @param	string		$template
 * @return	string
 */
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

/**
 * start a javascript block which will be placed at the footer
 * 
 */
function start_javascript_block()
{
	ob_start();
}

/**
 * end a javascript block and add it to the javascript which will be placed at the footer
 * 
 */
function end_javascript_block()
{
	$js = ob_get_clean();
	set_javascript($js);
}

/**
 * set a piece of javascript in the buffer
 * 
 * 
 * @param	string|null		$js					if you leave the $js param NULL then you will get (and flush) the buffer
 * @param	string			$unique				if you don't want the same snippet multiple times you can make sure it's unique by supplying a key
 * @return	null|string
 */
function set_javascript($js = null, $unique = null)
{
	static $buffer = array();
	
	if (is_null($js)) {
		$js		= implode("\n", $buffer);
		$buffer	= array();
		return $js;
	}
	
	if ($unique) {
		$buffer[$unique] = $js;
	} else {
		$buffer[] = $js;
	}
}

/**
 * add a javascript include
 * 
 * @param	string		$script
 */
function add_javascript_script($script)
{
	$js = <<<EOD
<script type="text/javascript" src="{$script}"></script>
EOD;
	
	set_javascript($js, $script);	
}

/**
 * get all the javascript from the buffer
 * 
 * @return	string
 */
function get_javascript()
{
	return set_javascript();
}