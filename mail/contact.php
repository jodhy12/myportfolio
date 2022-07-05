<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

date_default_timezone_set('Asia/Jakarta');

if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$from =  "hermanli02@yahoo.com"; #'bambangwijayaa14@gmail.com'; // Change this email to your //
$subject = "$m_subject:  $name";
$body = "You have received a new message from your website contact form.<br><br>" . "Here are the details:<br><br>Name: $name<br><br>Email: $email<br><br>Subject: $m_subject<br><br>Message:<br> $message";
$header = "From: $email";
$header .= "Reply-To: $email";

$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->Host =  'smtp.mail.yahoo.com'; #'smtp.gmail.com';
$mail->Username = $from;
$mail->Password =  'txdqmtrsvluppcce'; #'ikjeqokklcfuulgu'; // For gmail

$mail->SetFrom($from, 'no-reply');
$address = 'bambangwijayaa14@gmail.com';
$mail->AddAddress($address);

$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;

if ($mail->Send())
  echo "Message sent!";
else
  echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
