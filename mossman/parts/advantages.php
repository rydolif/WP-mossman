
<section class="advantages">
	<div class="container d-flex align-items-end justify-content-between">

		<?php if( have_rows('advantages_list') ): ?>
			<?php while( have_rows('advantages_list') ): the_row(); 
				$text = get_sub_field('text');
				$number = get_sub_field('number');
			?>
				<div class="advantages__item">
					<p><?php echo $text; ?></p>
					<span><?php echo $number; ?></span>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</section>