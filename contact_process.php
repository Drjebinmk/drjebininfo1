<?php

$resut="";
if(isset($_post['submit'])){
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->Host='smtp.gmail.com';
$mail->port=587;
$mail->SMPTAuth=true;
$mail->SMTPSecure='tls';
$mail->username='shabycht@gmail.com';
$mail->password='9947744466';
$mail->setfrom($_post['email']);
$mail->addAddress('drjebinmk@gmail.com');
$mail->addreaplyto($_post['email']);
$mail->ishtml(true);
$mail->Subject='Form submission dr jebin:'.$_post['subject'];
$mail->Body='<h1 align=center>Name :'.$_post['Enter Your Name'].'<br>Email: '.$_post['email']. <br>message: '.$_post['msg'].'</h1>';



























    $logo = 'img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'> <?= $result; ?> <tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

?>