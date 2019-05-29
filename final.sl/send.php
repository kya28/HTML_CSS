<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$message=$_POST['message'];

$to = "yakupova-00@mail.ru";

$subject = "Заявка с сайта";

$message = "Имя пользователя: ".htmlspecialchars($firstname).
"
Фамилия пользователя: ".htmlspecialchars($lastname).
"
Почта: ".htmlspecialchars($email). 
"
Сообщение: ".htmlspecialchars($message) ;

$headers = "From: final.sl <yakupova-00@final.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);

header('Location: home.php');
exit();
?>