<?php



//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//
class mail{
	
    
    
    public function send_email($subject, $body,$email_to){
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "aplimac.pensions@gmail.com";
//Set gmail password
	$mail->Password = "@aplimac2016";
//Email subject
	$mail->Subject = "$subject";
//Set sender email
	$mail->setFrom('aplimac.pensions@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	//$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "$body";
//Add recipient
	$mail->addAddress("$email_to");
//Finally send email
	if ( $mail->send() ) {
		//email sent
	}else{
		 //error handling here
	}
//Closing smtp connection
	$mail->smtpClose();
        
    }
}

 

?>