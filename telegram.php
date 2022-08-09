<?php

$name = $_POST['client_name'];
$email = $_POST['client_email'];
$message = $_POST['client_message'];


$token = "5379329868:AAH-FnOpwDCC0nZFhigzQCqmJ-AWm9ZYJ0Y";
$chat_id = "1968702610";

$arr = array(
  'Клиент' => $name,
  'Email' => $email,
  'Сообщение' => $message
);

foreach($arr as $key => $value) {
  $txt .= $key."<b> ". urldecode($value)."</b> "."%0A"; 
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  return true;
} else {
  return false;
}
?>