<h1>Portfolio</h1>

<div class="matrix">
	<div class="row">
		<?php for ($i = 1; $i <= 3; $i++): ?>
			<div class="col<?php echo $i; ?>">
				<img src="<?php echo asset('images/portfolio/'); ?>" />
			</div>
		<?php endfor; ?>
	</div>
</div>