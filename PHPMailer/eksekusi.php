<?php
error_reporting(E_ALL);
require 'PHPMailer/src/PHPMailer.php' ;
require 'PHPMailer/src/SMTP.php';
$mail =  new PHPMailer\PHPMailer1\PHPMailer();
    $mail->IsSMTP(); 
    $mail->IsHTML(true);
    $mail->SMTPAuth 	= true; 
    $mail->Host 		= "nugrohoprayogo.id";
    $mail->Port 		= 465;
    $mail->SMTPSecure 	= "ssl";
    $mail->Username 	= "blog@nugrohoprayogo.id"; //username SMTP
    $mail->Password 	= "emailsaya";   //password SMTP
	$mail->From    		= "blog@nugrohoprayogo.id"; //sender email
	$mail->FromName 	= "Nugroho Prayogo";      //sender name
	$mail->AddAddress("nugrohoprayogo97@gmail.com", "Nugroho Prayogo");//recipient: email and name
	$mail->Subject  	=  "Percobaan";
	$mail->Body     	=  "Coba-Coba";
	// if(isset($_FILES['fileImage1'])){
 // 		$mail->AddAttachment($_FILES['fileImage1']['tmp_name'],$_FILES['fileImage1']['name']);
	// }
	$file=
	if($mail->Send()){
     echo "Email sent successfully";
	}else{
	 echo "Email failed to send";
	}

   
?> 