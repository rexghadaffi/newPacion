
<?php
	if (logged_in() ===true)
	{
	$profiledetails = mysqli_query($con, "SELECT * FROM tblclientuser where userID = '".$_SESSION['id']."'");
	$row = mysqli_fetch_array($profiledetails);
	}
	if (isset($_POST['btnupdate']))
		{	
			$FirstName = $_POST['txtFname'];
		$Lastname = $_POST['txtLname'];
		$username = $_POST['txtUsername'];
		$email = $_POST['txtEmail'];
		
		$Contact =	$_POST['txtContact'];
		$gender = $_POST['txtGender'];
		$course = 	$_POST['txtCourse'];
		$year =	$_POST['txtYear'];
		$address = $_POST['txtaddress'];

		$sql = "UPDATE tblclientuser SET userName = '".$username."', userFirstName = '".$FirstName."', userLastName = '".$Lastname."', userGender = '".$gender."', userContactNum = '".$Contact."', userAddress = '".$address."', userEmail = '".$email."', userCourse = '".$course."', userYearGrad = '".$year."' where userID = ".$_SESSION['id']." ";
				$result = mysqli_query($con,$sql);
		if ($result)
		{
			echo '<script>updateSuccess();</script>';
			
		}
		else
		{
			die('Error: ' . mysqli_error($con));

		}

		

	  
		}		
				
		



?>