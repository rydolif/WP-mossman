
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
				<div class="find__sub-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider1_item45.jpg" alt="">
					<div class="find__grid--wrapper">
						<div class="find__text--grid">
							<p class="find__text-item find__text-item--faded">
									Стиль:
							</p>
							<p class="find__text-item">
									Классика
							</p>
							<p class="find__text-item find__text-item--faded">
									Форма: 
							</p>
							<p class="find__text-item">
									Прямые; Угловые; П-образные; C островом; C полуостровом; C барной стойкой; </p>
							<p class="find__text-item find__text-item--faded">
									Размер:
							</p>
							<p class="find__text-item">
									6м² - 12м² 
							</p>
							<p class="find__text-item find__text-item--faded">
									Материал:
							</p>
							<p class="find__text-item">
									МДФ - эмаль
							</p>
							<p class="find__text-item find__text-item--faded">
									Цвет: 
							</p>
							<p class="find__text-item">
									Белые; Черные; Красные; Бежевые; Фиолетовые; Венге; Хамелеон
							</p>
							<p class="find__text-item find__text-item--faded">
									Фактура фасада:
							</p>
							<p class="find__text-item">
									Матовая
							</p>
							<p class="find__text-item find__text-item--faded">
									Отделка: 
							</p>
							<p class="find__text-item">
									Покраска по цветовой палитре Color System (204 цвета).
							</p>
							<p class="find__text-item find__text-item--faded">
									Патина:
							</p>
							<p class="find__text-item">
									возможна
							</p>
							<p class="find__text-item find__text-item--faded">
									Виды фасадов:
							</p>
							<p class="find__text-item">
									глухой, рамка под стекло, рамка с перекрестием под стекло, решетка
							</p>
						</div>
						<p class="find__grid-title">
							Bristel Pro
						</p>
					</div>
					<div class="find__line">
							<p class="find__name">
									Bristel Pro
							</p>
							<p class="find__link">
									Описание
							</p>
					</div>
				</div>

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