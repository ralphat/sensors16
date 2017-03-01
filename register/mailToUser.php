<?php
require '../PHPMailer-master/PHPMailerAutoload.php';
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
	$recipient_email = $_POST['email'];
	$recipient_name = $_POST['name'];
	$mail->AddAddress($recipient_email, $recipient_name);
	$mail->Subject = 'Verification of Email account.';

	$mail->Body = '<html><body style="color:#000;line-height:normal">';

	$mail->Body .= '<p>Hello '.$_POST["name"].',</p><p>Greetings from Sensors\'17!</p><br /><p>Thank you for registering with us at sensors.org.in. Here are the credentials you provided during registration :<br />Username : '.$_POST["email"].'<br />Password : '.$_POST['password'].' <br />Hit the following link to activate your account and complete registration.</p>';

	$mail->Body .= '<p>sensors.org.in/register/verify.php?id='.md5($_POST["email"]).'</p><br /><p>Kindly ignore if you did no such registration.</p><p>Regards,<br />Sensors\'17 Team</p>';

	 
	$mail->Body .= '</body></html>';

	$mail->IsHTML(true);

	$mail->AltBody  =  'http://sensors.org.in/register/verify.php?id='.md5($_POST["email"]);
	    
    if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo; 
        return false;
    } else {
        $error = 'Message sent!';
        return true;
    }
?>
