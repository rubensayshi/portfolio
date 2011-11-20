/**
 * window.load
 */
$(window).load(function() {
	/*
	 * grab all divs with ".carousel" and treat them all seperate to allow multiple carousels on 1 page
	 */
	$(".carousel").each(function(i, carousel) {
		/*
		 * setup config
		 */
		var timeout = 2000;
		
		/*
		 * get the required DOM elements
		 * and make sure they're valid
		 */
		var $carousel	= $(carousel);	
		var $nav_area	= $carousel.find(".nav_area");
		var $show_area	= $carousel.find(".show_area");

		if (!$carousel.length || !$nav_area.length || !$show_area.length) {
			return;
		}		
		/*
		 * store timer so we can reset it
		 */
		var timer		= false;

		/**
		 * function to (re)set the timer for the automatic hover onto the next item
		 * 	the timer is based on the `timeout` var
		 * 
		 */
		var settimer = function()
		{
			if (!timeout) {
				return false;
			}
			
			if (timer) {
				clearTimeout(timer);
			}
			
			timer = setTimeout(hovernext, timeout);
		};

		/**
		 * hover to the next item
		 * 	either the next sibling or otherwise back to the first
		 * 
		 */
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
		
		/**
		 * hover the specified item
		 * 	de-hovers the other items
		 * 
		 * @param	on					the element 'triggering' the hover, the <A>
		 */
		var hover = function(on)
		{
			$(on).addClass('active');
			$nav_area.find('a').not(on).removeClass('active');

			$($(on).attr('href')).addClass('active');
			$show_area.find('img').not($(on).attr('href')).removeClass('active');
			

			//reset the timer
			settimer();
		};
		
		/*
		 * setup the mouseenter events
		 */
		$nav_area.find('a').mouseenter(function() { hover(this); });
		
		/*
		 * disable the click events (for now)
		 */
		$nav_area.find('a').click(function() { return false; });

		/*
		 * start the timer
		 */
		settimer();
	});
});
