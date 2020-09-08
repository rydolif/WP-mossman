<?php
	$SITE_TITLE = 'Mossman';
	$SITE_DESCR = '';

	if ( isset($_POST) ) {
		$themes = htmlspecialchars(trim($_POST['themes']));
		$name = htmlspecialchars(trim($_POST['name']));
		$phone = htmlspecialchars(trim($_POST['phone']));

		$utm_source = $_POST['utm_source']."<br>"; //полученное из формы name=utm_source
		$utm_medium = $_POST['utm_medium']."<br>"; //полученное из формы name=utm_medium
		$utm_campaign = $_POST['utm_campaign']."<br>"; //полученное из формы name=utm_campaign
		$utm_term = $_POST['utm_term']."<br>"; //полученное из формы name=utm_term
		$utm_content = $_POST['utm_content']."<br>"; //полученное из формы name=utm_content

		$to = 'rudolifrudolif@gmail.com';

		$headers = "From: $SITE_TITLE \r\n";
		$headers .= "Reply-To: ". $email . "\r\n";
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";

		$data .= 'Имя: '.$name."<br>";
		$data .= 'Телефон: '.$phone."<br>";

		$data .= 'utm_source: '.$utm_source."<br>";
		$data .= 'utm_medium: '.$utm_medium."<br>";
		$data .= 'utm_campaign: '.$utm_campaign."<br>";
		$data .= 'utm_term: '.$utm_term."<br>";
		$data .= 'utm_content: '.$utm_content."<br>";


		/* Принимаем значения UTM-меток */


		$message = "<div style='background:#ccc;border-radius:10px;padding:20px;'>
				".$data."
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