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

function start_javascript_block()
{
	ob_start();
}

function end_javascript_block()
{
	$js = ob_get_clean();
	set_javascript($js);
}

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

function add_javascript_script($script)
{
	$js = <<<EOD
<script type="text/javascript" src="{$script}"></script>
EOD;
	
	set_javascript($js, $script);	
}

function get_javascript()
{
	return set_javascript();
}