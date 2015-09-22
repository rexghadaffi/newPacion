<?php



date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';


$mail = new PHPMailer;


	$mail->IsMail();
	//$mail->SMTPAuth = true;
	$mail->Host = gethostbyname('smtp.gmail.com');
	//$mail->Host = gethostbyname('mx1.2freehosting.com');
	//$mail->Port = 25;
	$mail->SMTPDebug = 3;
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';

	
	$mail->Username = "sticollegecubaoalumni@gmail.com";
    $mail->Password = "stiadmin1234";
	
	$mail->IsHTML(true);
	$mail->SingleTo = true;
	$mail->Subject = "STI College Cubao Alumni";
	$mail->addAddress('rdfunclara0303@yahoo.com', 'Baba Wakkie');
	$mail->From = "sticollegecubaoalumni@gmail.com";
	$mail->FromName = "STI College Cubao Alumni";
//	$mail->AddReplyTo($from);

	
	$mail->Body .= '<html><body>';
	$mail->Body .= '<img src="http://localhost/newPacion/client/shared-resources/img/stiaa.jpg">';
	$mail->Body .= '<p>Hello , </p>
			<p>We received a request to reset the password associated with this email address. </p>
			<p>This is an auto generated password for you to be able to login.</p>
			<p>Auto generated password = .</p>
			<p>Click this link to redirect to Sti College Cubao Alumni Website.</p>
			<p>http://localhost/newPacion/client/</p>

			<p>This is auto generated email from the server. Please dont reply to this email</p>

			';
	$mail->Body .= '</body></html>';
	
	//$subject = "STI College Cubao Alumni";
	//$to = $email;
	//ini_set(smtp_server,'');
	//ini_set(smtp_port, '2525');
	//ini_set(auth_username, 'sticollegecubaoalumni@gmail.com');
	//ini_set(auth_password, 'stiadmin1234');
	// $headers = "From: " . strip_tags($from) . "\r\n";
	// $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	// $body = '<html><body>';
	// $body .= '<img src="http://localhost/newPacion/client/shared-resources/img/stiaa.jpg">';
	// $body .= '<p>Hello '.$user.', </p>
	// <p>We received a request to reset the password associated with this email address. </p>
	// <p>This is an auto generated password for you to be able to login.</p>
	// <p>Auto generated password = '.$tempPass.'.</p>
	// <p>Click this link to redirect to Sti College Cubao Alumni Website.</p>
	// <p>http://localhost/newPacion/client/</p>

	// <p>This is auto generated email from the server. Please dont reply to this email</p>

	// ';

	// $body .= '</body></html>';
	if($mail->send())
	{
		echo '<script>alert("Message sent!");</script>';
	}
	else
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
	}

?>