
<?php


	if (isset($_POST['btnlogin']))
		{

			$rooturl =  $_SERVER['HTTP_REFERER'];
		    $urlclient =  "http://localhost/newPacion/mvc-app/login.php";
	 		$urladmin = "http://localhost/newPacion/mvc-app/backend.php";
 			$username = $_POST['username'];
 			$password = $_POST['password'];
 			include "../../models/Login/loginModel.php";
 			$login =  new Login();
 			if ($rooturl == $urlclient)
 				{

						
						$login->SetData($username, $password, "tblcompanyuser");
						$array =  $login->GetData();

					if ($array[3] == 0)
					{
						echo "<script>alert('invalid')</script>";

					}
					else if ($array[3] == 1)
					{

							if ($array[4] == 1)
							{
							session_start();
							$_SESSION['id'] = $array[0];
							$_SESSION['user'] = $username;
							echo '<script type="text/javascript">window.location="../../views/home.php"</script>';
							die();
							}
							else if ($array[4] == 2)
							{

								// need landing page

							}
 					}	
				}


			else if ($rooturl == $urladmin)
 				{
 					
					$login->SetData($username, $password, "tblclientuser");
					$array =  $login->GetData();
					
					if ($array['3'] == 0)
					{
						echo "<script>alert('no')</script>";

					}
					else if ($array['3'] == 1)
					{

						echo "ok";
					} 



 				}	



		}



?>