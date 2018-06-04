<?php
if (!empty($_POST['username']) AND !empty($_POST['useremail']) !empty($_POST['usermessage'])){

  $letter = 'Имя: '.$_POST['username'].'\r\n';
  $letter .= 'Электронный адрес: '.$_POST['useremail'].'\r\n';
  $letter .= 'Сообщение: '.$_POST['usermessage'].'\r\n';

  if (mail('info.dreamsites@gmail.com', 'Новая заявка', $letter)){

  } else {
    alert('ОК')
  }
} else {

}
 ?>
