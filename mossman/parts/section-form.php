
<section class="section-form">
	<div class="container ">

		<form action="" class="form section-form__container">

			<input type="hidden" name="subject" value="Зафиксировать условия по акциям">

			<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
			<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
			<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
			<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
			<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">

			<div class="section-form__block">
				<label for="">Имя</label>
				<input type="text" name="name" required>
			</div>

			<div class="section-form__block">
				<label for="">Телефон</label>
				<input type="tel" name="phone"class="modal__phone" placeholder="+7 (___) ___ __ __" required>
			</div>

			<div class="section-form__block">
				<button class="section-form__btn">Зафиксировать условия</button>
			</div>
		</form>

	</div>
</section>
