
<section class="find">
	<a name="projects"></a>
	<div class="container d-flex find__container">

		<div class="find__title--wrapper">
			<h2 class="find__title">
				<?php the_field('projects_title'); ?>
			</h2>
			<div class="find__subtext">
				<?php the_field('projects_subtitle'); ?>
			</div>
		</div>

		<div class="find__tabs--wrapper">
			<p class="find__all find__tab--active">
				Все кухни
			</p>
			<p class="find__tab find__tab--classic">
				Классика
			</p>
			<p class="find__tab find__tab--provans">
				Прованс
			</p>
			<p class="find__tab find__tab--modern">
				Модерн
			</p>
			<p class="find__tab find__tab--neoclassic">
				Неоклассика
			</p>
			<p class="find__tab find__tab--scandinavian">
				Скандинавский
			</p>
			<p class="find__tab find__tab--loft">
				Лофт
			</p>
			<p class="find__tab find__tab--hi-tech">
				Хай-тек
			</p>
			<p class="find__tab find__tab--minimalistic">
				Минимализм
			</p>
			<p class="find__tab find__tab--present">
				Современный
			</p>
			<p class="find__tab find__tab--art-deco">
				Ар-деко
			</p>
			<div class="find__whiteline"></div>

			<div class="find__slider">
				<?php if( have_rows('find__list') ): ?>
					<?php while( have_rows('find__list') ): the_row(); 
						$id = get_sub_field('id');
						$img = get_sub_field('img');
						$name = get_sub_field('name');
						$description = get_sub_field('description');
					?>

					<div class="find__slide find__sub-slider <?php echo $id; ?>">
						<div class="find__sub-slide">
							<img src="<?php echo $img; ?>" alt="">
							<div class="find__grid--wrapper">
									<div class="find__text--grid">
										<?php echo $description; ?>
									</div>
									<p class="find__grid-title">
										<?php echo $name; ?>
									</p>
							</div>
							<div class="find__line">
								<p class="find__name">
									<?php echo $name; ?>
								</p>
								<p class="find__link">
									Описание
								</p>
							</div>
						</div>
					</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>

	</div>
</section>