<?php 
/**
 * @file
 * render the portfolio overview page
 * the projects are rendered in rows, the $cells var below sets how many projects on 1 row
 * 
 * the code is a bit messy but what it does is loop over the projects and every time we need a new row we close the previous and open a new one
 * 
 * @var	array[array]	$projects			an array with projects to display
 */

// define how many cells on 1 row
$cells = 3;
?>
<h1>Portfolio</h1>

<div class="matrix">
	<?php foreach ($projects as $project): ?>
		<?php if ($project['weight']%$cells == 0): ?>
			<?php if ($project['weight'] > 0): ?></div><?php endif; ?>
			<div class="row <?php echo ($project['weight']%($cells*2) == 0 ? 'even' : 'odd'); ?>">
		<?php endif; ?>
		
		<a href="<?php echo url("portfolio/{$project['slug']}"); ?>" class="span">
			<img width="130" height="82" src="<?php echo asset(reset($project['images'])); ?>" />
			<div class="mask"></div>
			<div class="description"><?php echo $project['title']; ?></div>
		</a>
	<?php endforeach; ?>
	</div>
</div>