<?php
    use PHPMailer\PHPHMailer\PHPMailer;
    use PHPMailer\PHPHMailer\Exception;

    require 'PHPMailer-6.6.3/src/Exception.php';
    require 'PHPMailer-6.6.3/src/Exception.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'PHPMailer-6.6.3/language/');
    $mail->IsHTML(true);

    //Отправитель
    $mail->setFform('worldshoppingbuyers@gmail.com');
    //Адресат
    $mail->addAddress('worldshoppingbuyers@gmail.com');
    //Тема письма
    $mail->Subject = "Заявка";



    //Тело письма
    $body = '<h1>Заявка</h1>';

    if(trim(!empty($_POST['firstName']))){
        $body.='<p><strong>Имя:</strong>  '.$_POST['firstName'].'</p>';
    }


    //Отправка письма
    if (!$mail->send()) {
        $message = 'Ошибка';
    } else {
        $message = 'Заявка отправлена!';
    }

    $responce = ['message' = > $message]

    header('Content-type: application/json')
    echo json_encode($responce)

?>