
<?php
	
	
	

	if (isset($_POST['btnregister']))
		{	

		$FirstName = $_POST['txtFname'];
		$Lastname = $_POST['txtLname'];
		$username = $_POST['txtUsername'];
		$email = $_POST['txtEmail'];
		$password = $_POST['txtPassword'];
		$Contact =	$_POST['txtContact'];
		$gender = $_POST['txtGender'];
		$course = 	$_POST['txtCourse'];
		$year =	$_POST['txtYeargrad'];
		$address = $_POST['txtaddress'];
		$password1 = $_POST['txtRetypePassword'];
		$userController = new UserController;

			// $regisUser = new RegistrationUser($username, $password, $FirstName, $Lastname, $gender, $Contact, $address, $email, $course, $year);
			// $userregis = $regisUser->GetData();
		

		if ($password != $password1)
		{
			$userController->wrongPasswords();	

		}
		else
		{
 $sql = "INSERT INTO tblclientuser (userName, userPassword, userFirstName, userLastName, userGender, userContactNum, userAddress, userEmail, userCourse, userYearGrad, userImage, userStatus, userTypeID) VALUES ('".$username."', '".$password."', '".$FirstName."', '".$Lastname."', '".$gender."', '".$Contact."', '".$address."', '".$email."', '".$course."', '".$year."', 'default.PNG', '0', '1')";
		$result = mysqli_query($con,$sql);
		if ($result)
		{
			$userController->regisSuccess();
			
		}
		else
		{
			die('Error: ' . mysqli_error($con));

		}

		}
	  
		}		
				
		



?>