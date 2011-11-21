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

<?php if ($project['tags']): ?>
<ul class="tags">
	<?php foreach ($project['tags'] as $tag): ?>
		<li><small>&gt;</small> <?php echo $tag; ?></li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>

<?php if ($project['urls']): ?>
External links:
<ul class="urls">
	<?php foreach ($project['urls'] as $url => $title): ?>
		<li><a href="<?php echo $url; ?>"><?php echo $title; ?></a></li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>

<div class="carousel">
	<div class="show_area">
		<?php foreach($project['images'] as $i => $img): ?>
			<img width="580" height="375" id="carousel_show_<?php echo PortfolioHelper::getImageId($img); ?>" class="<?php echo ($i == 0) ? 'active' : ''; ?>" src="<?php echo asset(PortfolioHelper::getLargeImage($img)); ?>" />
		<?php endforeach; ?>
	</div>
	<div class="nav_area">
		<?php foreach($project['images'] as $i => $img): ?>
			<a href="#carousel_show_<?php echo PortfolioHelper::getImageId($img); ?>" class="span <?php echo ($i == 0) ? 'active' : ''; ?>">
				<img width="130" height="82" src="<?php echo asset($img); ?>" />
				<div class="mask"></div>
			</a>
		<?php endforeach; ?>
	</div>
</div>

<?php echo $content; ?>