
<?php
if (logged_in() ===true)
{

$password = mysqli_query($con, "SELECT * FROM tblclientuser where userID = ".$_SESSION['id']."");
$rowpass = mysqli_fetch_array($password);

	
}

?>

<div class="modal fade" id="changepwModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-custom" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white;font-size:24px" align="center">Change Password</h4>
      </div>
	   <form method="POST" >
		  <div class="modal-body">
	    
			
			<div class="form-group">
				<label for="txtpassword">Enter Password</label>
				<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
			</div>
			<div class="form-group">
				<label for="txtpassword">New Password</label>
				<input type="password" class="form-control" name="password1" placeholder="Enter Password" required>
			</div>
			<div class="form-group">
				<label for="txtpassword">Retype New Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Enter Password" required>
			</div>
			
			
		  <div class="modal-footer">
			<button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success btn-lg" name="btnchange">Change</button>
		  </div>

		</div>  
	  </form>
    </div>
  </div>
</div>
<?php
if (isset($_POST['btnchange']))
{
	$pass = $_POST['password'];
	$pass1 = $_POST['password1'];
	$pass2 = $_POST['password2'];
	if ($rowpass['userPassword'] != $pass)
	{


		echo "<script>wronginput();</script>";
	}
	else if ($pass1 != $pass2)
	{

echo "<script>wronginputpass();</script>";
	}
	else
	{


			$sql = "UPDATE tblclientuser SET userPassword = ".$pass1." where userID = ".$_SESSION['id']." ";
				$result = mysqli_query($con,$sql);
		if ($result)
		{
			echo '<script>updateSuccess1();</script>';
			
		}
		else
		{
			die('Error: ' . mysqli_error($con));

		}
	}

	


}
?>
	