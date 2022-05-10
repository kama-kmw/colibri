<?php 

$phone = $_POST['phone'];

// Сообщение
$message = 'Пользователь оставил свой номер телефона : '.$phone;

// Отправляем если кнопка нажата
if(isset($_POST['submit_phone'])) {
mail('ascolibri12@gmail.com', 'Просьба перезвонить с сайта.', $message);
}

header('Location: ../index.html#footer');
exit;

?>