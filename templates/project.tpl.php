<?php 
/**
 * @file
 * render a project detail page
 * 
 * @var	array	$project			the project to display
 * @var	string	$content			the content for this project
 */

// we need this js file 
add_javascript_script(asset('js/carousel.js'));
?>
<h1><?php echo $project['title']; ?></h1>

<div class="carousel">
	<div class="show_area">
		<?php foreach($project['images'] as $i => $img): ?>
			<img id="carousel_show_<?php echo PortfolioHelper::getImageId($img); ?>" class="<?php echo ($i == 0) ? 'active' : ''; ?>" src="<?php echo asset(PortfolioHelper::getLargeImage($img)); ?>" />
		<?php endforeach; ?>
	</div>
	<div class="nav_area">
		<?php foreach($project['images'] as $i => $img): ?>
			<a href="#carousel_show_<?php echo PortfolioHelper::getImageId($img); ?>" class="span <?php echo ($i == 0) ? 'active' : ''; ?>">
				<img src="<?php echo asset($img); ?>" />
				<div class="mask"></div>
			</a>
		<?php endforeach; ?>
	</div>
</div>

<?php echo $content; ?>