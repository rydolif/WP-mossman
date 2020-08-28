
<footer class="footer">
	<div class="container">
			<div class="row">
					<div class="col-lg-7 ">

						<?php 
							wp_nav_menu( array(
								'menu'=>'footer_nav',
								'menu_class'=>'d-flex align-items-center justify-content-between flex-wrap',
								'theme_location'=>'footer_nav',
							) );
						?>

					</div>
					<div class="col-lg-5">
							<p class="footer__privacy">
									<a href="<?php the_field('policy', 'option'); ?>" target="_blank">
											<?php the_field('policy_text', 'option'); ?>
									</a>
									<br>
									<a href="<?php the_field('data', 'option'); ?>" target="_blank">
											<?php the_field('data_text', 'option'); ?>
									</a>
							</p>
					</div>
			</div>
	</div>
</footer>