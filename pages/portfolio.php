<?php 

$rows = 5;
$cols = 4;

function build_matrix_col_classes($r, $c, $rows, $cols)
{
	$classes = array();
	
	$classes[] = "span";
	$classes[] = "col{$c}";
	$classes[] = ($c%2 == 0 ? 'even' : 'odd');

	if ($c == $cols) {
		$classes[] = 'last';
	}
	
	if ($c == 1) {
		$classes[] = 'first';
	}
	
	return implode(" ", $classes);
}

$webroot	= dirname(dirname(__FILE__)) . '/httpdocs/';
$imagedir	= dirname(dirname(__FILE__)) . '/httpdocs/images/portfolio'; 
$images		= glob("{$imagedir}/*/*_small.png");

function random_image($images, $webroot) 
{
	$k = array_rand($images);
	$image = $images[$k];
	
	unset($images[$k]);
	
	return str_replace($webroot, '', $image);
}


?>

<h1>Portfolio</h1>

<div class="matrix">
	<?php for ($r = 1; $r <= $rows; $r++): ?>
		<div class="row <?php echo ($r%2 == 0 ? 'even' : 'odd'); ?>">
			<?php for ($c = 1; $c <= $cols; $c++): ?>
				<div class="<?php echo build_matrix_col_classes($r, $c, $rows, $cols); ?>">
					<img src="<?php echo asset(random_image($images, $webroot)); ?>" />
					<div class="mask mask-1"></div>
					<div class="mask mask-2"></div>
					<div class="description">Project #<?php echo ($r * $c); ?></div>
				</div>
			<?php endfor; ?>
		</div>
	<?php endfor; ?>
</div>