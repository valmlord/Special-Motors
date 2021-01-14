<?php
//Сбор данных из полей формы. 
$name = $_POST['user_name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['user_phone']; // Берём данные из input c атрибутом name="phone"

$token = "1372798737:AAESq86OzyTo1f288aGDVeChKg15tn7eVbQ"; // Тут пишем токен
$chat_id = "-494692038"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "Special Motors"; //Указываем название сайта

$arr = array(

  'Заявка с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>