<?php 

$mess= $_POST['message'];
$email = $_POST['email'];
$phone = $_POST['phone'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'tim.ki.94@mail.ru';                 // Наш логин
$mail->Password = '2UPpyR[Yizk2';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('tim.ki.94@mail.ru', 'Tim Ki');   // От кого письмо 
$mail->addAddress('yminakova90@mail.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка';
$mail->Body    = '
	Пользователь оставил свои данные <br> 
	Почта: '.$email.'<br>
	Телефон: ' . $phone . '<br>
	Сообщение: '.$mess.'<br>';
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    echo "Error";
} else {
	// var_dump($_POST);
    echo '<div class="form">
            <div class="text">Спасибо, с Вами свяжутся!</div>
            <button><a href="../index.php">Назад</a></button>
        </div>';
}
?>