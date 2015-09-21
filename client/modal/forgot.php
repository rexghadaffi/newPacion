

<div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-custom" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white;font-size:24px" align="center">Forgot Password</h4>
      </div>
	   <form method="POST" >
		  <div class="modal-body">
	    
			
			
			<div class="form-group">
				<label for="emailforgot">Email</label>
				<input type="text" class="form-control" name="emailforgot" placeholder="Enter Email Address" required>
			</div>
			
			
		  <div class="modal-footer">
			<button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success btn-lg" name="btnforgot">Send</button>
		  </div>

		</div>  
	  </form>
    </div>
  </div>
</div>
<?php
if (isset($_POST['btnforgot']))
{
	$emailforgoty = $_POST['emailforgot'];

$emailforg = mysqli_query($con, "SELECT * FROM tblclientuser where userEmail = '".$emailforgoty."'");

		$emailforg1 = mysqli_num_rows($emailforg);
		if ($emailforg1 == 0)
		{
	echo "<script>wrongemail();</script>";

		
	}
	else
	{
	
	$from = 'sticollegecubaoalumni@gmail.com';
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();
	$row = mysqli_fetch_array($emailforg);
	$email = $row['userEmail'];
	$user = $row['userName'];
	$tempPass = str_shuffle(uniqid());
	
	$res = mysqli_query($con, "UPDATE tblclientuser SET userPassword ='".$tempPass."' where userEmail = '".$email."'");
	
	//phpmailer functions
	$mail->IsMail();
	//$mail->SMTPAuth = true;
	$mail->Host = gethostbyname('smtp.gmail.com');
	//$mail->Host = gethostbyname('mx1.2freehosting.com');
	//$mail->Port = 25;
	$mail->SMTPDebug = 3;
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	
	$mail->IsHTML(true);
	$mail->SingleTo = true;
	$mail->Subject = "STI College Cubao Alumni";
	$mail->addAddress($emailforgoty);
	$mail->From = $from;
	$mail->FromName = "STI College Cubao Alumni";
	$mail->AddReplyTo($from);
	
	$mail->Username = "sticollegecubaoalumni@gmail.com";
    $mail->Password = "stiadmin1234";
	
	$mail->Body .= '<html><body>';
	$mail->Body .= '<img src="http://localhost/newPacion/client/shared-resources/img/stiaa.jpg">';
	$mail->Body .= '<p>Hello '.$user.', </p>
			<p>We received a request to reset the password associated with this email address. </p>
			<p>This is an auto generated password for you to be able to login.</p>
			<p>Auto generated password = '.$tempPass.'.</p>
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
	if($mail->Send())
	{
		echo '<script>alert("Message sent!");</script>';
	}
	// mail($to, $subject, $body, $headers);

	}
	
	


}
?>
	