<?php 

$phone = $_POST['phone'];

// Сообщение
$message = 'Пользователь оставил свой номер телефона : '.$phone;

// Отправляем если кнопка нажата
if(isset($_POST['submit_phone'])) {
mail('Kamil.l2014@list.ru', 'Просьба перезвонить с сайта.', $message);
}

header('Location: ../index.html#footer');
exit;

?>