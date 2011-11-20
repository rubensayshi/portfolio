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
			if (timer) {
				clearTimeout(timer);
			}
			
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
