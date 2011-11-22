<?php 
/**
 * @var array[array]	$pages			all pages, contains 'title', 'url', 'active'
 * @var	array			$page			reference to active path within $pages, also has 'content'
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="lt-ie9 ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="lt-ie9 ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="lt-ie9 ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class=""> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="<?php echo asset('css/reset.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/font.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/text.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/960.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>" />
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<title><?php echo ($page['page'] != 'index' ? "{$page['title']} | " : '') ?>Ruben de Vries</title>
</head>
<body>
<div id="container" class="container_12">
	<div class="prefix_3 grid_9 page-header">
		<<?php echo ($page['page'] != 'index' ? 'div' : 'h1') ?> class="header">
			Ruben <br /><small>de Vries</small>
		</<?php echo ($page['page'] != 'index' ? 'div' : 'h1') ?> >
		<<?php echo ($page['page'] != 'index' ? 'div' : 'h2') ?>  class="subheader">
			The geekish Web Developer
		</<?php echo ($page['page'] != 'index' ? 'div' : 'h2') ?> >
	</div>
	<div class="grid_3 sidebar">
		<nav class="nav">
			<ul>
				<?php foreach($pages as $p): ?>
					<li class="<?php echo ($p['active'] ? 'active' : ''); ?>"><a href="<?php echo url($p['url']); ?>"><?php echo $p['title']; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</nav>
		<ul class="contact">
			<li><a href="mailto:ruben@rubensayshi.com">E-Mail</a></li>
			<li><a href="http://twitter.com/saiko_ben">Twitter</a></li>
			<li><a href="https://github.com/rubensayshi">Github</a></li>
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
