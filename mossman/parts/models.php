<section class="models">

	<div class="models__booklet">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/booklet.png" alt="">
	</div>

	<div class="container">
		<div class="row">

			<div class="col-lg-12 relative">
				<h3 class="models__title">
					<?php the_field('models__title'); ?>
				</h3>
				<a href="<?php the_field('models__btn_link'); ?>" class="models__download--wrapper d-flex" download>
					<div class="models__icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.png" alt="">
					</div>
					<p class="models__download">
						<?php the_field('models__btn_text'); ?>
					</p>
				</a>
			</div>
			
		</div>
	</div>

</section>