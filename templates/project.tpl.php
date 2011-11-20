<?php 
/**
 * @var	array	$project			the project to display
 * @var	string	$content			the content for this project
 */
?>
<h1><?php echo $project['title']; ?></h1>

<div class="carousel">
	<div class="show_area">
		<?php foreach($project['images'] as $i => $img): ?>
			<img <?php echo ($i == 0) ? '' : 'style="display: none;"'; ?> src="<?php echo asset(PortfolioHelper::getLargeImage($img)); ?>" />
		<?php endforeach; ?>
	</div>
	<div class="nav_area">
		<?php foreach($project['images'] as $i => $img): ?>
			<img src="<?php echo asset($img); ?>" />
		<?php endforeach; ?>
	</div>
</div>

<?php echo $content; ?>