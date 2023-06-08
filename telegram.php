<?php

/* https://api.telegram.org/bot6104797248:AAEti3PIansCHmv1kPY_HSki4Q8wq2PJa5c/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "6104797248:AAEti3PIansCHmv1kPY_HSki4Q8wq2PJa5c";
$chat_id = "-821000015";
$arr = array(
  'Имя Клиента: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>