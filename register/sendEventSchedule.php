<?php
require '../../PHPMailer/PHPMailerAutoload.php';

include '../connect.php';

$query = "select Email from main where ID > 10666";
$res = mysql_query($query);

//Create a new PHPMailer instance
$mail = new PHPMailer;

$mail->isSMTP();

//Set who the mail->Body is to be sent from
$mail->setFrom('noreply@sensors.org.in', 'Sensors 16');

$mail->addAddress("sarwesh.krshnn@gmail.com");

while($row = mysql_fetch_assoc($res))
	$mail->addBCC($row['Email']);

//Set the subject line
$mail->Subject = 'Sensors\'16 events schedule.';

$mail->Body = '<html><body>';

$mail->Body .= '<p>Hello,</p><p> Greeting from Sensors\'16.</p>';

$mail->Body .= '<p>The following attachment contains the schedule for events and workshops at Sensors\'16. For further details, kindly visit the &nbsp;<a href="http://sensors.org.in">website</a>.<br /><br />Regards,<br />Sensors\'16 Team</p>';

$mail->Body .= '</body></html>';

$mail->addAttachment('./schedule.jpg');

$mail->IsHTML(true);

//send the mail->Body, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    echo "Mail not sent";
} else {
   echo "Mail sent";
}

?>