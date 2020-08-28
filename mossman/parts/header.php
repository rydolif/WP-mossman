
<header class="header">
	<div class="container header__container--big">
			<div class="row align-items-center">
					<div class="col-lg-12 d-flex justify-content-between align-items-center flex-wrap">
							<a href="<?php echo get_home_url(); ?>" class="header__logo">
									<img src="<?php the_field('logo', 'option'); ?>" alt="">
							</a>
							<p class="header__text">
									<?php the_field('statistics', 'option'); ?>
							</p>
							<p class="header__phone">
									<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__text-phone">
										<?php the_field('tel', 'option'); ?>
									</a>
							</p>
							<p class="header__time">
									<?php the_field('time-work', 'option'); ?>
									<br>
									<a href="#contacts">
											<?php the_field('header_map_text', 'option'); ?>
									</a>
							</p>
							<p class="header__phone header__consultation">
									<a href="#" onclick="yaCounter28420846.reachGoal('consult_click'); return true;">
											<?php the_field('header_consultation_text', 'option'); ?>
									</a>
							</p>
					</div>
			</div>
	</div>
	<div class="container header__container--small">
			<div class="row align-items-center">
					<div class="col-lg-12 d-flex justify-content-between align-items-center flex-wrap">
							<div class="header__logo">
									<img src="<?php the_field('logo', 'option'); ?>" alt="">
							</div>
							<p class="header__text">
									<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__text-phone">
										<?php the_field('tel', 'option'); ?>
									</a>
									<br>
									<span><?php the_field('statistics', 'option'); ?></span>
							</p>
							<p class="header__phone">
									<a href="#" onclick="yaCounter28420846.reachGoal('consult_click'); return true;">
										<?php the_field('header_consultation_text', 'option'); ?>
									</a>
							</p>
							<p class="header__time">
									<a href="#contacts">
										<?php the_field('header_map_text', 'option'); ?>
									</a>
							</p>
					</div>
			</div>
	</div>
</header>
