
<?php
	include "model/LoginModel.php";
	include "User_Controller.php";
	

	if (isset($_POST['btnlogin']))
		{	

	
			$userController = new UserController;
			$username = $_POST['username'];
 			$password = $_POST['password']; 			
 					
				if ($username == "" || $password == "")
					{
						$userController->missingInputs();		
					}
				else 
					{
						$loginuser = new LoginUser($username, $password, "tblclientuser");
						$array = $loginuser->GetData();

						if ($array[1] != $username || $array[2] != $password)
							{
								$userController->wrongInputs();	
							}
						else
							{
											session_start();
											$_SESSION['id'] = $array[0];
									
											echo '<script type="text/javascript">window.location="index.php"</script>';
							
							
							}							

					
					}	
		}		
				
		



?>