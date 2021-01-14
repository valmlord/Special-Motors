<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'spclmtrs@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'aSc6S7z7XpG4Wss'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('spclmtrs@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('korshukovstepan@gmail.com');     // Кому будет уходить письмо 
$mail->addAddress('spclmtrs@gmail.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с Вашего сайта:';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '';
$mail->AltBody = '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>