<?php
	if (isset($_POST['btnlogin']))
		{

			
			// $urlclient =  "http://localhost/newPacion/mvc-app/abb.php";
			// $urladmin = "http://localhost/newPacion/mvc-app/abc.php";
 		// 	if ($urlclient)
 		// 	{

					$username = $_POST['username'];
 					$password = $_POST['password'];
 					include "../../models/Login/loginModel.php";
 					$login =  new Login();
					$login->SetData($username, $password, "tblcompanyuser");
					$array =  $login->GetData();
	
				if ($array[3] == 1)
					{
						session_start();
						$_SESSION['id'] = $array[0];
						echo '<script type="text/javascript">window.location="../../views/home.php"</script>';
							die();
					}
 			// }
		

 			
		}







?>