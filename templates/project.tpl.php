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
<?php start_javascript_block(); ?>
<script type="text/javascript">
/**
 * window.load
 */
$(window).load(function() {
	$(".carousel").each(function(i, carousel) {
		var $carousel	= $(carousel);	
		var $nav_area	= $carousel.find(".nav_area");
		var $show_area	= $carousel.find(".show_area");
		var timer		= false;

		
		var settimer = function()
		{
			timer = setTimeout(hovernext, 2000);
		};

		var hovernext = function()
		{
			var $first	= $nav_area.find('a:first');
			var $next	= $nav_area.find('a.active ~ a');

			if ($next.length) {
				hover($next.get(0));
			} else {
				hover($first.get(0));
			}
		};
		
		var hover = function(on)
		{
			$(on).addClass('active');
			$nav_area.find('a').not(on).removeClass('active');

			$($(on).attr('href')).addClass('active');
			$show_area.find('img').not($(on).attr('href')).removeClass('active');
			settimer();
		};

		$nav_area.find('a').mouseenter(function() { hover(this); });
		$nav_area.find('a').click(function() { return false; });

		settimer();
	});
});

</script>
<?php end_javascript_block(); ?>

<?php echo $content; ?>