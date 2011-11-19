/**
 * @file
 * adds a hidden button to enable the tilted version of the website
 */

/**
 * window.load
 */
$(window).load(function() {
	/*
	 * get the required DOM elements
	 * and make sure they're valid
	 */
	var $pageHeader = $('.page-header');
	var $container	= $('#container');
	
	if (!$pageHeader.length || !$container.length) {
		return;
	}

	/**
	 * enable the tilted version
	 */
	var tilt = function() {
		$container.css({'-webkit-transform':	'rotate(-3deg)',
						   '-moz-transform':	'rotate(-3deg)',
								'transform':	'rotate(-3deg)'
					});
	};
	
	/*
	 * create a button and bind tilt
	 */
	var $tiltbutton = $('<div />')
							.css({	width:				'50px',
									height:				'20px',
									'background-color': '#FEFEFE',
									opacity:			0.05,
									position: 			'absolute', 
									top: 				'70px', 
									right: 				'0px',
									cursor:				'pointer',
							})
							.attr('title', 'Click to tilt the page')
							.click(tilt)
						;

	/*
	 * append button, make sure the position is relative on the parent for absolute pos of the button
	 */
	$pageHeader.css({position: 'relative'}).append($tiltbutton);
	
});
