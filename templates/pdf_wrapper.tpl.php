<?php 
/**
 * @var array[array]	$pages			all pages, contains 'title', 'url', 'active'
 * @var	array			$page			reference to active path within $pages, also has 'content'
 */
?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="<?php echo asset('css/reset.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/font.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/text.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/960.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/pdf.css'); ?>" />
	<?php if (isset($_GET['printpdf'])): ?>
		<link rel="stylesheet" href="<?php echo asset('css/printpdf.css'); ?>" />
	<?php endif; ?>
	<title>Curriculum Vitae - Ruben de Vries</title>
</head>
<body>
<div id="container" class="container_12">
	<div class="prefix_3 grid_9 page-header">
		<h1 class="header">Ruben <br /><small>de Vries</small></h1>
		<h2 class="subheader">Curriculum Vitae</h2>
	</div>
	<div class="grid_3 sidebar">
		<nav class="nav">
			<ul>
				<li>Ruben de Vries</li>
				<li>Webdeveloper</li>
				<li>Snowboarder</li>
				<li>Gamer</li>
				<li>Perfectionist</li>
			</ul>
		</nav>
		<ul class="contact">
			<li><a href="mailto:ruben@rubensayshi.com">ruben@rubensayshi.com</a></li>
			<li><a href="http://www.rubensayshi.com/resume">www.rubensayshi.com</a></li>
		</ul>
	</div>
	<div class="grid_9 content-wrapper">
		<div class="content">
			<?php echo $page['content']; ?>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo asset('js/jquery-1.6.2.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('js/tilt.js'); ?>"></script>
<?php echo get_javascript(); ?>
</body>
</html>
