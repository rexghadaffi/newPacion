
<?php
	include "../models/Login/loginModel.php";
	include "user_controller.php";
	include "../core/database.php";

	if (isset($_POST['btnlogin']))
		{	

		echo "<script>loadingBar();</script>";
			$userController = new UserController;
			$rooturl = $userController->getUrl();

 			$username = $_POST['username'];
 			$password = $_POST['password'];
 		
 		
 			if ($rooturl == $userController->urlclient)
 				{
					$login =  new Login($username, $password, "tblclientuser");
					$array = $login->GetData();			
				}


			else if ($rooturl == $userController->urladmin)
 				{


 					if ($username == "" || $password == "")
					{
						
					  	$userController->missingInputs();
												
					}
					else 
					{
						$login = new Login($username, $password, "tblcompanyuser");
						$array = $login->GetData();

						if ($array[1] != $username || $array[2] != $password)
						{
							$userController->wrongInputs();


						}

						else if ($array[3] == 0)
							{
								$userController->inactiveStatus();

							}
						else if ($array[3] == 1)
							{

								
											echo "<script>stoploadingBar();</script>";
											session_start();
											$_SESSION['id'] = $array[0];
											$_SESSION['user'] = $username;
											$_SESSION['level'] = $array[4];

						 date_default_timezone_set('Asia/Manila');  
								$currentdate = date("Y/m/d"); 
								$currentTime = date("g:i:s a");
								$timestamp= date('Y-m-d G:i:s');
			$id= $_SESSION['id'];				
			$remark	= 'admin log-in <span style="color:blue;font-weight:bold;">"'.$_SESSION['user'].'"</span>';
	        $result= mysqli_query($con,"INSERT INTO tblaudit (userID, auditDateTime, auditRemarks) VALUES ('$id','$timestamp', '$remark')");
	
			echo '<script type="text/javascript">window.location="home.php"</script>';
									// echo '<script>getData();</script>'; 
										die();
							
							}	
					}	
				}		
					
					// $array =  $login->GetData();
					
					// if ($array['3'] == 0)
					// {
					// 	echo "<script>alert('no')</script>";

					// }
					// else if ($array['3'] == 1)
					// {

					// 	echo "ok";
					// } 



 				



		}



?>