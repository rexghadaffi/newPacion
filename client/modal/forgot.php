

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

		//email
	}
	
	


}
?>
	