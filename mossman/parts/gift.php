<section class="gift">
	<div class="gift__slider">

	<?php if( have_rows('gift__list') ): ?>
		<?php while( have_rows('gift__list') ): the_row(); 
			$gift__title = get_sub_field('gift__title');
			$gift__img = get_sub_field('gift__img');
		?>

		<div class="gift__slide">
			<div class="gift__text--wrapper container">
				<div class="row">
					<div class="col-lg-6 relative">
						<div class="gift__title">
							при расчете <br>
							до  <span class="counted__day">20</span> <span class="counted__month">июня</span> <br>
							<span>дарим.</span>
						</div>
						<p class="gift__descr">
							<?php echo $gift__title; ?>
						</p>
						<div class="gift__img">
							<img src="<?php echo $gift__img; ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>

	</div>
</section>