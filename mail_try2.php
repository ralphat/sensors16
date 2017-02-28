<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

    $mail = new PHPMailer();  // create a new object
    $mail->IsSMTP(); // enable SMTP
//    $mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;  // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
    $mail->SMTPAutoTLS = false;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    $mail->Username = "admin@sensors.org.in";  
    $mail->Password = "Sensors!1";           
    $mail->SetFrom("admin@sensors.org.in", "Sensors");
	   
    $mail->AddAddress("vishnugt@hotmail.com");
    $mail->Subject = 'Verification of Email account.';

	$mail->Body = '<html><body style="color:#000;line-height:normal">';

	$mail->Body .= '<p>Hello ,</p><p>Greeting from Sensors\'16.</p><br /><p>This email was recently registered in sensors.org.in. Click the following link to activate your account and to generate your SENSORS ID.</p>';

	$mail->Body .= '<p>sensors.org.in/16/register/verify.php?id=</p><br /><p>Kindly ignore if you did no such registration.</p><p>Regards,<br />Sensors\'16 Team</p>';

	 
	$mail->Body .= '</body></html>';

	$mail->IsHTML(true);

	$mail->AltBody  =  'http://sensors.org.in/16/register/verify.php?id=';
	    
    if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo; 
        return false;
    } else {
        $error = 'Message sent!';
        return true;
    }
?>
