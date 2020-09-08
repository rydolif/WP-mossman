
<!-- Консультация -->
<div class="modal-consultation" id="modal-consultation">
	<div class="modal modal-consultation__window">
		<div class="modal-consultation__close" id="modal-consultation__close">
			<i class="fas fa-times-circle"></i>
			<p class="modal__closetext">
				<span>Я не хочу </span> получить ответы и подарки
			</p>
		</div>
		<p class="modal__dont">
			<span>Я не хочу </span> получить ответы <br> и подарки
		</p>
		<h2 class="modal-consultation__title">
			<span>Бесплатная.</span><br> онлайн-консультация по любому вопросу
		</h2>
		<p class="modal-consultation__subtitle">
			и в подарок <span> 3 уникальных дизайн-проекта </span> вашей будущей кухни.
		</p>
		<div class="modal-consultation__images">
			<div class="modal-consultation__image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal2.jpg" alt="">
			</div>
			<div class="modal-consultation__image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal1.jpg" alt="">
			</div>
			<div class="modal-consultation__image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal3.jpg" alt="">
			</div>
		</div>
		<div class="modal-consultation__down modal-consultation__down--small">
			<p class="modal-consultation__text">
				<span>Наш разговор ни к чему вас не обязывает.</span>  Мы вам оперативно перезвоним и 
				ответим на любые вопросы. <br>
				<br>
				Например, сможем <span class="modal__orange">просчитать стоимость вашей кухни с точностью 100% </span>  или проконсультируем по выбору материалов и расскажем, на чем можно сэкономить без ущерба для качества.
			</p>
			<form class="modal-consultation__form modal-consultation__form2 form">

				<input type="hidden" name="subject" value="Заявка на консультацию с лендинга landing. mossman-kuhni.ru">

				<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
				<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
				<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
				<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
				<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">

				<input type="hidden" name="vidform" value="бесплатная консультация">
				<input type="hidden" name="formname" value="Бесплатная консультация"><!-- ROISTAT -->
				<input type="tel" name="phone" class="modal-consultation__input modal__phone"  placeholder="+7 (___) ___ __ __" required>
				<input type="submit" class="modal-consultation__button modal-consultation__submit" value="Получить консультацию">
				<div class="modal__agreement modal-consultation__agreement">
					<label for="modal-consultation__check " class="modal-consultation__check--label modal-consultation__check--active">
						<input type="checkbox" checked="checked" id="modal-consultation__check" class="modal-consultation__check">  
					</label>
					<p>
						Я принимаю <a href="#"> условия пользовательского соглашения </a> и согласен на <a href="#"> обработку персональных данных </a>
					</p>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Консультация конец -->

<div class="modal-download relative" id="modal-download">
	<div class="modal modal-download__window">
			<div class="modal-consultation__close modal-download__close" id="modal-download__close">
					<i class="fas fa-times-circle"></i>
					<p class="modal__closetext">
							<span>Я не хочу </span> найти свою идеальную кухню.
					</p>
			</div>
			<div class="col-12 modal__dont--col">
					<p class="modal__dont">
							<span>Я не хочу </span> найти свою<br>
							идеальную кухню
					</p>
			</div>
			<div class="col-lg-6">
					<h2 class="modal-consultation__title">
							Бесплатно <br>
							<span>скачайте</span>
							<br>
							130 моделей <br>
							кухонь
					</h2>
					<p class="modal-consultation__subtitle modal-download__subtitle">
							и найдите среди них свою  — идеальную! 
					</p>
					<p class="modal-consultation__text">
							Получите каталог на почту <br>
							<br>
							<br>
							Листайте с удовольствием на <br>
							компьютере или телефоне.
					</p>
					<div class="modal__agreement modal-consultation__agreement modal-download__agreement">
							<label for="modal-download__check " class="modal-consultation__check--label modal-consultation__check--active">
									<input type="checkbox" checked="checked" id="modal-download__check" class="modal-consultation__check">  
							</label>
							<p>
									Я принимаю <a href="#"> условия пользовательского соглашения </a> и согласен на <a href="#"> обработку персональных данных </a>
							</p>
					</div>
			</div>
			<div class="col-lg-6 relative">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal-catalog.png" alt="" class="modal-download__catalog">
					<form class="modal-download__form modal-download__form2 form">

						<input type="hidden" name="subject" value="Заявка на консультацию с лендинга landing. mossman-kuhni.ru">

						<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
						<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
						<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
						<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
						<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">


							<input type="hidden" name="vidform" value="скачать каталог">
							<input type="hidden" name="formname" value="Скачать каталог"><!-- ROISTAT --> 
							<input type="email" name="email" class="modal-download__email" placeholder="e-mail*" required>
							<input type="submit" class="modal-download__btn" id="modal-download__btn" value="Получить на почту">
					</form> 
					<div class="modal-download__social">
							<a href="#" class="modal-download__viber">
									<i class="fab fa-viber"></i>
							</a>
							<a href="#" class="modal-download__whatsapp">
									<i class="fab fa-whatsapp-square"></i>
							</a>
							<a href="#" class="modal-download__telegramm">
									<i class="fab fa-telegram-plane "></i>
							</a>
					</div>
			</div>
	</div>
</div>


<!-- Калькулятор -->
<div class="modal-consultation modal-free " id="modal-free">
	<div class="modal modal-consultation__window modal-free__window" >
		<div class="modal-consultation__close" id="modal-free__close">
			<i class="fas fa-times-circle"></i>
			<p class="modal__closetext">
					<span>Я не хочу </span> расчёт
					и подарки
			</p>
		</div>
		<p class="modal__dont">
			<span>Я не хочу </span> расчёт и подарки
		</p>
		<p class="modal-free__middle-text">
			До  <span class="counted__day">20</span> <span class="counted__month">июня</span>
		</p>
		<h2 class="modal-consultation__title">
			<span>Бесплатный. </span>расчет <br>
			стоимости кухни <br>
			с точностью 100%
		</h2>
		<p class="modal-free__middle-text">
				и подарки
		</p>
		<div class="modal-consultation__images modal-free__images">
			<div class="modal-consultation__image modal-free__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift__slide1.jpg" alt="">
					<p class="modal-free__image-text">
							150 000 руб. на <br>
							новую кухню
					</p>
			</div>
			<div class="modal-consultation__image modal-free__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift__slide2.jpg" alt="">
					<p class="modal-free__image-text">
							Столешницу <br>
							из камня
					</p>
			</div>
			<div class="modal-consultation__image modal-free__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift__slide3.jpg" alt="">
					<p class="modal-free__image-text">
							Посудомоечную <br>
							машину Electrolux
					</p>
			</div>
			<div class="modal-consultation__image modal-free__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift__slide4.jpg" alt="">
					<p class="modal-free__image-text">
							Скидки на технику <br>
							Bosch до 40%
					</p>
			</div>
			<div class="modal-consultation__image modal-free__image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift__slide5.jpg" alt="">
					<p class="modal-free__image-text">
							Отпуск для <br>
							всей семьи
					</p>
			</div>
	</div>
		<div class="modal-consultation__down modal-free__down relative">
			<div class="modal-free__card">
				<a href="#" target="_blank" class="modal-free__link">
					<div class="modal-free__icon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/watch__white.png" alt="">
					</div>
					<p>
					"Узнайте 5 фатальных ошибок при выборе кухни"
					</p>
				</a>
				<p class="modal-free__subtext">
					Доступ к уникальному pdf-документу «5 фатальных ошибок при выборе кухни» 
					откроется сразу после нажатия на кнопку «Забираю все бесплатно»
				</p>
			</div>
			<form class="modal-consultation__form modal-free__form form">

				<input type="hidden" name="subject" value="5 фатальных ошибок при выборе кухни">

				<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
				<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
				<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
				<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
				<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">

				<input type="hidden" name="formname" value="Калькулятор"><!-- ROISTAT -->
				<input type="tel" name="phone" class="modal-consultation__input modal__phone"  placeholder="+7 (___) ___ __ __" required>
				<input type="submit" class="modal-consultation__button" value="Забираю всё бесплатно">
				<div class="modal__agreement modal-consultation__agreement">
					<label for="modal-free__check1" class="modal-consultation__check--label modal-consultation__check--active">
					;	<input type="checkbox" checked="checked" id="modal-free__check1" class="modal-consultation__check">  
					</label>
					<p>
						Я принимаю <a href="#"> условия пользовательского соглашения </a> и согласен на <a href="#"> обработку персональных данных </a>
					</p>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Калькулятор конец -->

<div class="modal modal-consultation modal-free modal-order" id="modal-order">
	<div class="modal modal-consultation__window modal-order__window">
			<div class="modal-consultation__close" id="modal-order__close">
					<i class="fas fa-times-circle"></i>
					<p class="modal__closetext">
							<span>Я не хочу </span> сэкономить до 100 000 руб
					</p>
			</div>
			<p class="modal__dont">
					<span>Я не хочу </span> сэкономить<br>
					до 100 000 руб
			</p>
			<p class="modal-free__middle-text">
					До  <span class="counted__day">20</span> <span class="counted__month">июня</span>
			</p>
			<h2 class="modal-consultation__title modal-order__title">
					<span>Закажите.</span> инженерную <br>
					экспертизу за <span class="modal__linespan"> <nobr> 8 500 руб.</nobr> </span> <br>
					<span>бесплатно.</span> 
			</h2>
			<p class="modal-free__middle-text">
					чтобы сэкономить до 100 000 руб. <br>
					и сделать правильный выбор
			</p>
			<p class="modal-order__smalltext">Это вас не обязывает заказывать кухню у нас</p>
			<div class="modal-consultation__down modal-free__down modal-order__down">

					<form class="modal-consultation__form modal-order__form form modal-consultation__form--center">

						<input type="hidden" name="subject" value="Заявка на инженерную экспертизу с лендинга landing. mossman-kuhni.ru">
						
						<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
						<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
						<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
						<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
						<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">

							<input type="hidden" name="vidform" value="инженерная экспертиза">
							<input type="hidden" name="formname" value="Инженерная экспертиза"><!-- ROISTAT -->
							<input type="tel" class="modal-consultation__input modal-order__input modal__phone" id="order__phone" name="phone" placeholder="+7 (___) ___ __ __" required>
							<button class="modal-consultation__button modal-order__button" id="modal-order__submit">Заказать бесплатную экспертизу <br> и сэкономить до 100 000 руб.</button>
							<div class="modal__agreement modal-consultation__agreement">
									<label for="modal-free__check" class="modal-consultation__check--label modal-consultation__check--active">
											<input type="checkbox" checked="checked" id="modal-free__check" class="modal-consultation__check">  
									</label>
									<p>
											Я принимаю <a href="#"> условия пользовательского соглашения </a> и согласен на <a href="#"> обработку персональных данных </a>
									</p>
							</div>
					</form>
			</div>
	</div>
</div>


<!-- Виход за поле -->
<div class="modal-download modal-exit relative" id="modal-exit">
	<div class="modal modal-download__window">
			<div class="modal-consultation__close modal-download__close" id="modal-exit__close">
					<i class="fas fa-times-circle"></i>
					<p class="modal__closetext">
							<span>Я отказываюсь </span> от полезного <br>
							материала и 100 000 руб.
					</p>
			</div>
			<div class="col-lf-12 col-xl-7">
					<h2 class="modal-consultation__title">
							ОСТАНЬТЕСЬ ВСЕГО <br> НА МИНУТКУ...
					</h2>
					<p class="modal-consultation__subtitle modal-download__subtitle">
							и мы бесплатно отправим вам <br>
							<span>уникальный pdf-документ</span>
					</p>
					<div class="modal-exit__grid">
							<p class="modal-exit__text">
									«5 фатальных ошибок при выборе кухни»
							</p>
							<div class="modal-exit__mac">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal-mac.png" alt="">
							</div>
							<div class="modal-exit__clip">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal-exit-clip.png" alt="">
							</div>
							<p class="modal-exit__text modal-exit__text2">
									И подарим <span> 100 000 руб. </span> на шкафы купе
									
							</p>
					</div>
			</div>
			<div class="col-lg-12 col-xl-5 relative">
					<p class="modal-consultation__text modal-exit__lighttext">
							Отправим на почту <br>
							<br>
							<br>
							Листайте с удовольствием <br>
								на компьютере или телефоне.
					</p>
					<form class="modal-download__form modal-exit__form form">

						<input type="hidden" name="subject" value="5 фатальных ошибок при выборе кухни">
						<input type="hidden" name="description" value="Спасибо за доверие! Сертификат на 100 000 на покупку шкафа-купе и файл. «5 фатальных ошибок при выборе кухни» во вложении. Надеемся этот памятка поможет Вам не потерять деньги. Если Вам понадобиться консультация, обращайтесь:">

						<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
						<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
						<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
						<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
						<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">

						<input type="hidden" name="vidform" value="окно ухода с сайта">
						<input type="hidden" name="formname" value="Останьтесь на минутку"><!-- ROISTAT -->
						<input type="email" name="email" class="modal-download__email" placeholder="e-mail*" required>
						<input type="submit" class="modal-download__btn" id="modal-exit__submit" value="Получить на почту">
					</form>
					<div class="modal__agreement modal-consultation__agreement modal-download__agreement">
							<label for="modal-download__check " class="modal-consultation__check--label modal-consultation__check--active">
									<input type="checkbox" checked="checked" id="modal-download__check" class="modal-consultation__check">  
							</label>
							<p>
									Я принимаю <a href="#"> условия пользовательского соглашения </a> и согласен на <a href="#"> обработку персональных данных </a>
							</p>
					</div>
					<div class="modal-download__social">
							<a href="#" class="modal-download__viber">
									<i class="fab fa-viber"></i>
							</a>
							<a href="#" class="modal-download__whatsapp">
									<i class="fab fa-whatsapp-square"></i>
							</a>
							<a href="#" class="modal-download__telegramm">
									<i class="fab fa-telegram-plane "></i>
							</a>
					</div>
			</div>
	</div>
</div>
<!-- Виход за поле конец -->


<!-- Окна благодарности -->
<div class="modal-redirect--wrapper" id="modal-redirect1">
	<div class="modal-redirect relative">
			<div class="modal-consultation__close modal-download__close " id="modal-redirect1__close">
					<i class="fas fa-times-circle"></i>
			</div>
			<p class="modal-redirect__middle-text">
					БЛАГОДАРИМ ВАС ЗА ЗАЯВКУ!  
			</p>
			<p class="modal-redirect__big-text">
					<span>НАШИ ДИЗАЙНЕРЫ</span> <br>
					СКОРО С ВАМИ <br>
					СВЯЖУТСЯ <br>            
			</p>
			<p class="modal-redirect__small-text">
					Через 5 секунд вы автоматически будете перенаправлены на наш специальный раздел с уже 
					выполненными проектами. <br>
					<a href="https://mossman-kuhni.ru/projects">www.mossman-kuhni.ru/projects</a> <br>
					<br>
					Хорошего дня!
			</p>
	</div>
</div>

<div class="modal-redirect--wrapper" id="modal-redirect2">
	<div class="modal-redirect relative">
			<div class="modal-consultation__close modal-download__close" id="modal-redirect2__close">
					<i class="fas fa-times-circle"></i>
			</div>
			<p class="modal-redirect__middle-text">
					Успешно!
			</p>
			<p class="modal-redirect__big-text">
					<span>Каталог</span> <br>
					отправлен на <br>
					вашу почту <br>            
			</p>
			<p class="modal-redirect__small-text">
					А пока полистайте  этот сайт или специальный раздел с уже выполненными проектами. <br>
					<a href="https://mossman-kuhni.ru/projects">www.mossman-kuhni.ru/projects</a> <br>
					<br>
					Хорошего дня!
			</p>
	</div>
</div>

<div class="modal-redirect--wrapper" id="modal-redirect3">
	<div class="modal-redirect relative">
			<div class="modal-consultation__close modal-download__close" id="modal-redirect3__close">
					<i class="fas fa-times-circle"></i>
			</div>
			<p class="modal-redirect__middle-text">
					Успешно!  
			</p>
			<p class="modal-redirect__big-text modal-redirect__big-text2">
					<span>Полезные материалы</span> <br>
					и сертификат на <br>
					100 000 руб. уже <br>
					отправлены            
			</p>
			<p class="modal-redirect__small-text">
					Через 5 секунд вы автоматически будете перенаправлены на наш специальный раздел с уже выполненными проектами. <br>
					<a href="https://mossman-kuhni.ru/projects">www.mossman-kuhni.ru/projects</a> <br>
					<br>
					Хорошего дня!
			</p>
	</div>
</div>
<!-- Окна благодарности конец -->



