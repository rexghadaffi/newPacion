<?php

if (isset($_POST['btnlogin']))
{

 $username = $_POST['username'];
 $password = $_POST['password'];
include "../../models/Login/loginModel.php";
 $login =  new Login();
 $login->SetData($username, $password, "tblcompanyuser");

$array =  $login->GetData();

echo $array[0] . "<br/>";

echo $array[1] . "<br/>";

echo $array[2] . "<br/>";
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