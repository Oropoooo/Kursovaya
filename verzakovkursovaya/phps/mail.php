<?php 

require_once('../phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$login = $_POST['login'];
$email = $_POST['email'];
$datetime = $_POST['datetime'];
$tables = implode(', ', $_POST['tables']);

$datetime_formated = str_replace('T',' ', $datetime);

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';                        // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'verzakovigor@mail.ru';             // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'dsP7k2M0K3jibuqzqz0G';            // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, ssl also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('verzakovigor@mail.ru');               // от кого будет уходить письмо?
$mail->addAddress('verzakovigor@mail.ru');            // Кому будет уходить письмо 
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка на бронирование';
$mail->Body    = 'Пользователь ' .$login. ' оставил заявку на бронирование. <br> Email: ' .$email. '<br> Дата и время: ' .$datetime_formated. '<br> Выбранные столики: ' .$tables;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: ../thanks/thanks.html');
}
?>

<?php

    require_once('../phpmailer/PHPMailerAutoload.php');
    $mail = new PHPMailer;
    $mail->CharSet = 'utf-8';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $datetime = $_POST['datetime'];
    $tables = implode(', ', $_POST['tables']);

    $datetime_formated = str_replace('T',' ', $datetime);

    $mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.ru';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'verzakovigor@mail.ru';             // Ваш логин от почты с которой будут отправляться письма
    $mail->Password = 'dsP7k2M0K3jibuqzqz0G';            // Ваш пароль от почты с которой будут отправляться письма
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, ssl also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('verzakovigor@mail.ru');               // от кого будет уходить письмо?
    $mail->addAddress($email);            // Кому будет уходить письмо 
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Заявка на бронирование';
    $mail->Body    = 'Уважаемый(ая) ' .$login. ', Вы оставили заявку на бронирование. <br> Email: ' .$email. '<br> Дата и время: ' .$datetime_formated. '<br> Выбранные столики: ' .$tables;
    $mail->AltBody = '';

    if(!$mail->send()) {
        echo 'Error';
    } else {
        header('location: ../thanks/thanks.html');
    }
?>