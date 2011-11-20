<h1>Portfolio</h1>

<div class="matrix">
	<?php foreach (PortfolioHelper::getAllProjects() as $project): ?>
		<?php if ($project['weight']%3 == 0): ?>
			<?php if ($project['weight'] > 0): ?></div><?php endif; ?>
			<div class="row <?php echo ($project['weight']%6 == 0 ? 'even' : 'odd'); ?>">
		<?php endif; ?>
		
		<a href="<?php echo url("portfolio/{$project['slug']}"); ?>" class="span">
			<img src="<?php echo asset(reset($project['images'])); ?>" />
			<div class="mask"></div>
			<div class="description"><?php echo $project['title']; ?></div>
		</a>
	<?php endforeach; ?>
	</div>
</div>