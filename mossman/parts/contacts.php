
<section class="contacts relative tabs">
	<a name="contacts"></a>
	<div class="container">
		<div class="row">

			<div class="col-lg-6">
				<h2 class="contacts__title"><?php the_field('contacts__title'); ?></h2>
				<p class="contacts__text"><?php the_field('contacts__subtitle'); ?></p>
				<p class="contacts__text contacts__text--decor"><?php the_field('contacts__place'); ?></p>

				<?php if( have_rows('contacts__list') ): ?>
					<ul class="contacts__list">
					<?php while( have_rows('contacts__list') ): the_row(); 
						$adress = get_sub_field('adress');
						$i++;
					?>

					<li><a href="#tabs__<?php echo $i; ?>"><?php echo $adress; ?></a></li>

					<?php endwhile; $i = 0; ?>
					</ul>
				<?php endif; ?>

				<p class="contacts__text">
					<?php the_field('time-work', 'option'); ?>
				</p>
				<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="contacts__link contacts__phone" >
					<?php the_field('tel', 'option'); ?>
				</a>
				<a href="mailto:<?php the_field('mail', 'option'); ?>" class="contacts__link" >
					<p><?php the_field('mail', 'option'); ?></p>
				</a>
				<div class="contacts__social">
					<div class="contacts__icon">
						<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
							<i class="fab fa-instagram-square"></i>
						</a>
					</div>
					<div class="contacts__icon ">
						<a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
							<i class="fab fa-facebook-square"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="col-lg-6 contacts__map--column">

				<?php if( have_rows('contacts__list') ): ?>
					<?php while( have_rows('contacts__list') ): the_row(); 
						$iframe = get_sub_field('iframe');
						$i++;
					?>

					<div id="tabs__<?php echo $i; ?>" class="tabs__wrap contacts__map"><?php echo $iframe; ?></div>

					<?php endwhile; ?>
				<?php endif; ?>
					
			</div>

		</div>
	</div>
</section>