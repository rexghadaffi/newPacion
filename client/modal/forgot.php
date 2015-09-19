

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

	$row = mysqli_fetch_array($emailforg);
	$email = $row['userEmail'];
	$user = $row['userName'];
	$tempPass = str_shuffle(uniqid());
	
	$res = mysqli_query($con, "UPDATE tblclientuser SET userPassword ='".$tempPass."'");
	

$subject = "STI College Cubao Alumni";
$from = 'danieltinao@gmail.com';
$to =  $emailforgoty;

$headers = "From: " . strip_tags($from) . "\r\n";
$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$body = '<html><body>';
$body .= '<img src="http://stialumni.3eeweb.com/client/shared-resources/img/stiaa.jpg">';
$body .= '<p>Hello '.$user.', </p>
<p>We received a request to reset the password associated with this email address. </p>
<p>This is an auto generated password for you to be able to login.</p>
<p>Auto generated password = '.$tempPass.'.</p>
<p>Click this link to redirect to Sti College Cubao Alumni Website.</p>
<p>http://stialumni.3eeweb.com</p>

<p>This is auto generated email from the server. Please dont reply to this email</p>

';

$body .= '</body></html>';

mail($to, $subject, $body, $headers);

	}
	
	


}
?>
	