$(window).load(function() {
	var $pageHeader = $('.page-header');
	var $container	= $('#container');
	
	if (!$pageHeader.length || !$container.length) {
		return;
	}

	var tilt = function() {
		$container.css({'-webkit-transform':	'rotate(-3deg)',
						   '-moz-transform':	'rotate(-3deg)',
								'transform':	'rotate(-3deg)'
					});
	};
	
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

	$pageHeader.css({position: 'relative'}).append($tiltbutton);
	
});
