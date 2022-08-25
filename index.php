<?php

$to "ak7047529@gmail.com";
$subject = $_POST['tsubject'];
$message = $_POST['tmessage'];
$from= $_POST['tmail'];
$headers = "from: $from";

$mail($to, $subject, $message, $headers);

echo"Thanks fot sending the mail to us ans thanks for contacting us";

?>