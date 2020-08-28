<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once "../lib/vendor/autoload.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/roistat/roistat.php';//ROISTAT
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use SimpleHtmlToText\Parser;
$to = "bodya.lushpa@gmail.com, info@kuhnicity.ru, control.zayavok@yandex.ru";

$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: <robot@kuhnicity.ru>\r\n";
$headers .= "Reply-To: " . "\r\n";

$keys = [
    'name' => 'Имя',
    'vidform' => 'Вид формы',
    'phone' => 'Телефон',
    'text' => 'Содержание письма',
    'email' => 'Почта',
    'price1' => 'Количество занятий',
    'href' => 'Метки',
];

$subject = "Заявка с сайта 'Кухни'";

$content = "";
$note = "";
foreach ($_POST as $k => $v) {
    if (isset($keys[$k]))
        $k = $keys[$k];
    if (is_array($v))
        $v = implode(', ', $v);
    $content .= '<p><b>' . $k . ':</b> ' . strip_tags($v) . '</p>' . PHP_EOL;
    $note .= $k . ': ' . strip_tags($v) . PHP_EOL;
}

$message = "
        <html>
            <head>
                <title>" . $subject . "</title>
            </head>
            <body><b>Заявка пришла со страницы:</b> " . $_SERVER["HTTP_REFERER"] .'<br>' . $content . "</body>
        </html>";

$form = array(
    'phone' => $_POST['phone'],
    'name' => $_POST['name'],
    'email' => '',
    'funnel' => '1000',
    'channel' => '1',
    'responsible' => '100037',
    'lead' => '',
    'task' => '',
    'note' => $note,
);
$mail = new PHPMailer(true);

try {
    $mail->setFrom('robot@kuhnicity.ru', 'Робот'); //kuhni <lead@kuhni.ru>
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->CharSet = "utf-8";
    $mail->Subject = $subject;
    $mail->msgHTML($message);
    // $mail->Body    = $message;
    // $mail->AltBody = (new Parser())->parseString($message);

    // $mail->isSMTP();
    // $mail->SMTPAuth = true;
    // $mail->SMTPDebug = 0;
    
    // $mail->Host = 'ssl://smtp.timeweb.ru';
    // $mail->Port = 465;
    // $mail->Username = 'robot@kuhnicity.ru';
    // $mail->Password = 'Пароль';

    $mail->send();
} catch (Exception $ex) {
    //если ошибка, отправляем функцией mail
    mail($to, $subject, $message, $headers);
}

//ROISTAT BEGIN
$visit_id = array_key_exists('roistat_visit',$_COOKIE) ? $_COOKIE['roistat_visit'] : null;
$name = array_key_exists('name',$_REQUEST) ? $_REQUEST['name'] : null;
$phone = array_key_exists('phone',$_REQUEST) ? $_REQUEST['phone'] : null;
$email = array_key_exists('email',$_REQUEST) ? $_REQUEST['email'] : null;
$form_name = array_key_exists('formname',$_REQUEST) ? $_REQUEST['formname'] : 'неопределенная';
$leadName = "Новый лид с формы '{$form_name}'";

$comment = null;
$comment .= array_key_exists('style',$_REQUEST) ? "Стиль: ".$_REQUEST['style'].PHP_EOL : null;
$comment .= array_key_exists('material',$_REQUEST) ? "Материал: ".$_REQUEST['material'].PHP_EOL : null;
$comment .= array_key_exists('type',$_REQUEST) ? "Тип: ".$_REQUEST['type'].PHP_EOL : null;
$comment .= array_key_exists('tech',$_REQUEST) ? "Бытовая техника: ".$_REQUEST['tech'].PHP_EOL : null;
$comment .= array_key_exists('number',$_REQUEST) ? "Длина: ".$_REQUEST['number'].PHP_EOL : null;
$comment .= array_key_exists('calc_result',$_REQUEST) ? "Примерная стоимость: ".$_REQUEST['calc_result']." руб.".PHP_EOL : null;

$roistat = new Roistat();
$roistat -> createProxyLead($name, $phone, $email, $visit_id, $leadName, $comment, true);
//ROISTAT END

//фидбэк клиенту
$forClientForms = [
    "окно ухода с сайта",
    "скачать каталог",
];
if($_POST["email"] && in_array($_POST["vidform"], $forClientForms)){
    $subject = "Важное сообщение с сайта КухниСити!";

    $email = htmlspecialchars($_POST["email"]);
    $html = file_get_contents("../mail/20-let-kompanii.html");
    try {

        //Recipients
        $mail->setFrom('robot@kuhnicity.ru', 'КухниСити'); //kuhni <lead@kuhni.ru>
        $mail->addAddress($email);
        
        // $mail->addBCC($to);
        
        // Attachments
        $mail->addAttachment('../mail/150000_na_pokupku_kuhni.jpg', '150000р_на_покупку_кухни.jpg');
        $mail->addAttachment('../mail/ingenernaya_ekspertiza.jpg', 'инженерная_экспретиза.jpg');
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->msgHTML($html);
        // $mail->AltBody =  (new Parser())->parseString($html);
        $mail->CharSet = "utf-8";

        $mail->send();
        echo 'Сообщение отправлено';
    }catch(Exception $ex){
        http_response_code(400);
        echo "Сообщение не отправлено. Ошибка: {$mail->ErrorInfo}";
    }    
}



?>
