<?php
	$SITE_TITLE = 'Mossman';
	$SITE_DESCR = '';

	if ( isset($_POST) ) {

		$to = 'info@mossman-kuhni.ru';

		$subject = $_POST['subject'] ? htmlspecialchars(trim($_POST['subject'])) : '';
		$description = $_POST['description'] ? htmlspecialchars(trim($_POST['description'])) : '';

		$name = htmlspecialchars(trim($_POST['name']));
		$phone = htmlspecialchars(trim($_POST['phone']));
		$email = htmlspecialchars(trim($_POST['email']));

		$style = htmlspecialchars(trim($_POST['style']));
		$material = htmlspecialchars(trim($_POST['material']));
		$type = htmlspecialchars(trim($_POST['type']));
		$tech = htmlspecialchars(trim($_POST['tech']));
		$number = htmlspecialchars(trim($_POST['number']));
		$calc_result = htmlspecialchars(trim($_POST['calc_result']));

		$utm_source = $_POST['utm_source']; //полученное из формы name=utm_source
		$utm_medium = $_POST['utm_medium']; //полученное из формы name=utm_medium
		$utm_campaign = $_POST['utm_campaign']; //полученное из формы name=utm_campaign
		$utm_term = $_POST['utm_term']; //полученное из формы name=utm_term
		$utm_content = $_POST['utm_content']; //полученное из формы name=utm_content

		$headers = "From: $SITE_TITLE \r\n";
		$headers .= "Reply-To: ". $email . "\r\n";
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";

		// -------------Базовые----------
		if ( $name != '' ) {
			$data .= 'Имя: '.$name."<br>";
		}
		if ( $phone != '' ) {
			$data .= 'Телефон: '.$phone."<br> <br>";
		}

		// -------------Выход----------
		if ( $email != '' ) {
			$to = $email;

			$data .= '<p><b>Спасибо за доверие</b>!</p> <p>Сертификат на 100 000 на покупку шкафа-купе и файл. <a href="https://landing.mossman-kuhni.ru/wp-content/themes/mossman/assets/Catalog_Mossman_2020.pdf"><b style="font-size: 18px;">«5 фатальных ошибок при выборе кухни»</b></a> по <a href="https://landing.mossman-kuhni.ru/wp-content/themes/mossman/assets/Catalog_Mossman_2020.pdf"><b>ссылке</b></a>. Надеемся этот памятка поможет Вам не потерять деньги.</p>';
			$data .= 'Если Вам понадобиться консультация, обращайтесь:';
		
		}

		if ( $description != '' ) {
			$data .= ' '.$description."<br> <br>";
		}

		// -------------Калькулятор----------
		if ( $style != '' ) {
			$data .= 'Стиль: '.$style."<br> <br>";
		}
		if ( $material != '' ) {
			$data .= 'Материал: '.$material."<br> <br>";
		}
		if ( $type != '' ) {
			$data .= 'Тип: '.$type."<br> <br>";
		}
		if ( $tech != '' ) {
			$data .= 'Выберите бытовую технику: '.$tech."<br> <br>";
		}
		if ( $number != '' ) {
			$data .= 'Длина: '.$number."<br> <br>";
		}
		if ( $calc_result != '' ) {
			$data .= 'Примерная стоимость: '.$calc_result."<br> <br>";
		}

		// -------------UTM----------
		if ( $utm_source != '' ) {
			$data .= 'utm_source: '.$utm_source."<br>";
		}
		if ( $utm_medium != '' ) {
			$data .= 'utm_medium: '.$utm_medium."<br>";
		}
		if ( $utm_campaign != '' ) {
			$data .= 'utm_campaign: '.$utm_campaign."<br>";
		}
		if ( $utm_term != '' ) {
			$data .= 'utm_term: '.$utm_term."<br>";
		}
		if ( $utm_content != '' ) {
			$data .= 'utm_content: '.$utm_content."<br>";
		}

		$message = "<div style='background:#ccc;border-radius:10px;padding:20px;'>
				".$data."
				<br>\n
				<hr>\n
				<br>\n
				<p><b>Если Вам понадобиться консультация, обращайтесь:</b></p>
				<p>Торговая сеть «MOSSMAN» </p>
				<p>Телефон: <a href='tel:+74953695577' style='color: #000;'>+7 (495) 369-55-77</a> </p>
				<p>E-mail: <a href='mailto:info@mossman-kuhni.ru' style='color: #000;'>info@mossman-kuhni.ru</a></p>
				<p><a href='www.mossman-kuhni.ru' style='color: #000; target='_blank'>www.mossman-kuhni.ru</a></p>
				<br>\n
				<hr>\n
				<br>\n
				<small>это сообщение было отправлено с сайта ".$SITE_TITLE." - ".$SITE_DESCR.", отвечать на него не надо</small>\n</div>";

		if ( $headers ) {
			echo '';
		} else {
				echo '<div class="error">Ошибка headers</div>';
		}

		$send = mail($to, $subject, $message, $headers);

		if ( $send ) {
			echo '';
		} else {
				echo '<div class="error">Ошибка отправки формы</div>';
		}

	}
	else {
			echo '<div class="error">Ошибка, данные формы не переданы.</div>';
	}
	die();


?>