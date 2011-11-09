<?php 
/**
 * @var array[array]	$pages			all pages, contains 'title', 'url', 'active'
 * @var	array			$page			reference to active path within $pages, also has 'content'
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="<?php echo asset('css/reset.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/font.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/text.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/960.css'); ?>" />
	<link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>" />
	<?php if ($env == 'prod'): ?>
		<link rel="stylesheet" href="<?php echo asset('css/tilt.css'); ?>" />
	<?php endif; ?>
	
	<title><?php echo $page['title']; ?> | Ruben de Vries</title>
</head>
<body>
<div id="container" class="container_12">
	<div class="prefix_3 grid_9 page-header">
		<h1>
			Ruben <br /><small>de Vries</small>
		</h1>
		<h2>
			The geekish Web Developer
		</h2>
	</div>
	<div class="grid_3 sidebar">
		<nav>
			<ul>
				<?php foreach($pages as $p): ?>
					<li class="<?php echo ($p['active'] ? 'active' : ''); ?>"><a href="<?php echo url($p['url']); ?>"><?php echo $p['title']; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</nav>
	</div>
	<div class="grid_9 content-wrapper">
		<div class="content">
			<?php echo $page['content']; ?>
		</div>
	</div>
</div>
</body>
</html>