<?php 
include_once('php/connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$targetAddr = $_POST['recipient'];
$subj = $_POST['subject'];
$mess = $_POST['message'];

$con = connect();
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug = 1;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->Host = "smtp.gmail.com";
$mail->Username = "ardums.clothing18@gmail.com";
$mail->Password = "@rDUms_C10+ing";
$mail->IsHTML(true);
$mail->AddAddress($targetAddr, "");
$mail->SetFrom("ardums.clothing18@gmail.com", "Ardums Company");
$mail->Subject = "testing";
$content = "<b>".$mess."</b>";


$mail->MsgHTML($content);
if(!$mail->Send()){
	echo "error while sending mail";
	var_dump($mail);
}else{
	echo "Email sent succesfully";
}

?>