<?php 

$name = $_POST['name'];
$phone = $_POST['phone_с'];
$comment = $_POST['message'];

// Сообщение
$message = 'Пользователь '.$name.' оставил комментарий : 
'.$comment.'
Номер или почта - '.$comment;

// Отправляем если кнопка нажата
if(isset($_POST['submit_comment'])) {
mail('ascolibri12@gmail.com', 'Комментарий с сайта.', $message);
}

header('Location: ../index.html#adres');
exit;

?>