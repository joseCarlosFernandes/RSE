<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function mandarEmail($nomeDestinatario,$To,$Subject,$Message) {

	require('./src/PHPMailer.php');
	require('./src/Exception.php');
	require('./src/SMTP.php');

	$mail = new PHPMailer;
	//$mail->SMTPDebug = 2;									// Enable verbose debug output
	$mail->isSMTP();										// Set mailer to use SMTP
	$mail->Charset = 'UTF-8';
	$mail->Host = 'smtp.gmail.com';  		  				// Specify main and backup SMTP servers
	$mail->SMTPAuth = true;									// Enable SMTP authentication
	//$mail->SMTPSecure = 'tls';							// Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;										// TCP port to connect to
	$mail->Username = 'rse.supp@gmail.com';         	// SMTP username
	$mail->Password = 'kcsthwpojabklibl';				// SMTP password
	$mail->From = 'rse.supp@gmail.com';
	$mail->FromName = utf8_decode('Suporte RSE');
	if (gettype($To)=="array") {
		foreach ($To as $key => $value) {
			$mail->addAddress($value);  // Add a recipient
		}
	} else {
		$mail->addAddress($To);  // Add a recipient
	}
	$mail->isHTML(true);									// Set email format to HTML
	//$mail->addAttachment('/var/tmp/file.tar.gz');			// Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');	// Optional name

	$mail->Subject = utf8_decode($Subject);
	$mail->Body    = utf8_decode($Message);
	$mail->AltBody = 'Seu email precisa ser capaz de usar HTML para mostrar essa mensagem! Verifique!';

	if(!$mail->send()) {
	    echo('Mensagem nao pode ser enviada: Mailer Error: ' . $mail->ErrorInfo);
	    return false;
	} else {
	    //echo("Email enviado para $nomeDestinatario");
	    return true;
	}	
	//print_r($mail);
	//die();
} // termina aqui o mandarEmail

?>