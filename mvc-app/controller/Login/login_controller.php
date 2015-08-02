<?php

if (isset($_POST['btnlogin']))
{

// $username = $_POST['username'];
//$password = $_POST['password'];
include "../../models/Login/loginModel.php";
 $login =  new Login();
echo $login->getData();
// if ($login > 0)
// {
// 	session_start();
// 	$_SESSION['username'] = $username;
// 	header('../../views/home.php');
// 	echo "ok";

// }
// else
// {

// echo "notok";

// }


}



?>