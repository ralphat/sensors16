<?php
require '../../PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the mail->Body is to be sent from
$mail->setFrom('noreply@sensors.org.in', 'Sensors 16');
//Set who the mail->Body is to be sent to
$mail->addAddress("monisha1947@gmail.com");
//Set the subject line
$mail->Subject = 'Verification of Email account.';

$mail->Body = '<html><body style="color:#000;line-height:normal">';

$mail->Body .= '<p>Hello '.$_POST["name"].',</p><p>Greeting from Sensors\'16.</p><br /><p>This email was recently registered in sensors.org.in. Click the following link to activate your account and to generate your SENSORS ID.</p>';

$mail->Body .= '<p>sensors.org.in/16/register/verify.php?id='.md5("monisha1947@gmail.com").'</p><br /><p>Kindly ignore if you did no such registration.</p><p>Regards,<br />Sensors\'16 Team</p>';

 
$mail->Body .= '</body></html>';

$mail->IsHTML(true);

$mail->AltBody  =  'sensors.org.in/16/register/verify.php?id='.md5("monisha1947@gmail.com");   

//send the mail->Body, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    $output = "Registration not complete. Check the email ID provided.";
} else {
    $output = "Verification email sent. Click the link sent to your email ID to activate your account.";
}
?>