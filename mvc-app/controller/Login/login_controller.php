
<?php


	if (isset($_POST['btnlogin']))
		{
			echo "<script>loadingBar();</script>";
			$rooturl =  $_SERVER['HTTP_REFERER'];
		    $urlclient =  "http://localhost/newPacion/mvc-app/login.php";
	 		$urladmin = "http://localhost/newPacion/mvc-app/views/backend.php";
 			$username = $_POST['username'];
 			$password = $_POST['password'];
 			include "../models/Login/loginModel.php";
 		
 			if ($rooturl == $urlclient)
 				{
					$login =  new Login($username, $password, "tblclientuser");
					$array = $login->GetData();			
				}


			else if ($rooturl == $urladmin)
 				{
 					if ($username == "" || $password == "")
					{
						
					  echo "   <script>missingInputs();</script>";
					  	echo "<script>stoploadingBar();</script>";
												
					}
					else 
					{
						$login = new Login($username, $password, "tblcompanyuser");
						$array = $login->GetData();

						if ($array[3] == 0)
							{
								echo "<script>inactiveStatus();</script>";
									echo "<script>stoploadingBar();</script>";

							}
						else if ($array[3] == 1)
							{

								if ($array[4] == 1)
									{
										echo "<script>stoploadingBar();</script>";
										session_start();
										$_SESSION['id'] = $array[0];
										$_SESSION['user'] = $username;
										echo '<script type="text/javascript">window.location="home.php"</script>';
										/* echo '<script>ajaxRedirect();</script>'; */
										die();
									}
								else if ($array[4] == 2)
									{

										// need landing page

									}
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