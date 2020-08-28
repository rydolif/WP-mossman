<section class="top">
	<div class="top__bg">
			<img src="<?php the_field('hero_bg'); ?>" alt="">
	</div>
	<div class="container">
			<div class="row">
					<div class="col-lg-12">
							<h1 class="top__title">
								<?php the_field('hero_title'); ?>
							</h1>
							<p class="top__subtitle">
								<?php the_field('hero_subtitle'); ?>
							</p>
							<p class="top__year">
								<?php the_field('hero_guarantee'); ?>
							</p>
							<a href="#calc" class="top__btn--wrapper">
									<button class="top__btn" onclick="yaCounter28420846.reachGoal('calc'); return true;">
										<?php the_field('hero_btn'); ?>
									</button>
							</a>
							<p class="top__action">
									<span class="top__orange">
											При расчете до <span class="counted__day">20</span> <span class="counted__month">июня</span> дарим: 
									</span>
							</p>
							<p class="top__extra">
								<?php the_field('hero_action'); ?>
							</p>
							<div class="top__free">
								<?php the_field('hero_free'); ?>
							</div>
					</div>
			</div>
	</div>
</section>