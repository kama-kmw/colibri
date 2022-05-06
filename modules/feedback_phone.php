<?php 

$phone = $_POST['phone'];

// Сообщение
$message = 'Пользователь оставил свой номер телефона : '.$phone;

// Отправляем если кнопка нажата
if(isset($_POST['submit_phone'])) {
//   mail('phil.psy@rudn.ru', 'Отзыв с сайта.', $message);
mail('surha_dag@mail.ru', 'Просьба перезвонить с сайта.', $message);
}

header('Location: ../index.html#footer');
exit;

?>