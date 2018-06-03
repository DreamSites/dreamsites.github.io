<?php
$msg_box = ""; // в этой переменной будем хранить сообщения формы

    $message  = "Имя заказчика: " . $_POST['username'] . "<br/>";
    $message .= "E-mail заказчика: " . $_POST['useremail'] . "<br/>";
    $message .= "Сообщение заказчика: " . $_POST['usermessage'];
    send_mail($message); // отправим письмо


// делаем ответ на клиентскую часть в формате JSON
echo json_encode(array('result' => $msg_box), JSON_UNESCAPED_UNICODE);


// функция отправки письма
function send_mail($message){
    // почта, на которую придет письмо
    $mail_to = "info.dreamsites@gmail.com";
    // тема письма
    $subject = "Новый заказ";

    // заголовок письма
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
    $headers .= "From: Покупка сайта <buy@dream-sites.ru>\r\n"; // от кого письмо

    // отправляем письмо
    mail($mail_to, $subject, $message, $headers);
}

?>
