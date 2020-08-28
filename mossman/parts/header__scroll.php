
<a name="main"></a>

<div class="header__scroll">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-4 col-lg-2 col-xl-1">
					<a href="<?php echo get_home_url(); ?>" class="header__scroll--logo">
							<img src="<?php the_field('logo', 'option'); ?>" alt="">
					</a>
			</div>
			<div class="col-0 col-lg-6 col-xl-6 header__menu--col">
					<nav class="header__nav">

						<?php 
							wp_nav_menu( array(
								'menu'=>'header_nav',
								'menu_class'=>'list',
								'theme_location'=>'header_nav',
							) );
						?>

					</nav>
			</div>
			<div class="col-8 col-lg-4 col-xl-5">
					<div class="header__scroll--contacts  d-flex align-items-center justify-content-end">
							<p class="header__scroll--consultation" onclick="yaCounter28420846.reachGoal('consult_click'); return true;">
								<?php the_field('header_consultation_text', 'option'); ?>
							</p>
							<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__scroll--phone" onclick="yaCounter28420846.reachGoal('tel'); return true;">
								<?php the_field('tel', 'option'); ?>
							</a>
							<div class="header__burger--wrapper">
									<div class="header__burger">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger.png" alt="">
									</div>
									<div class="header__burger--dropdown">

											<?php 
												wp_nav_menu( array(
													'menu'=>'header_nav_mob',
													'menu_class'=>'list',
													'theme_location'=>'header_nav_mob',
												) );
											?>

									</div>
							</div>
					</div>
			</div>
		</div>
	</div>
</div>