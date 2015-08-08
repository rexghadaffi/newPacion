<?php

class UserController
{
	public $urlclient =  "http://localhost/newPacion/mvc-app/login.php";
	public	$urladmin = "http://localhost/newPacion/mvc-app/views/backend.php";

 

public function getUrl ()
{

return $url =  $_SERVER['HTTP_REFERER'];


}

public function missingInputs()
{

echo "<script>missingInputs();</script>";
echo "<script>stoploadingBar();</script>";

}

public function inactiveStatus ()
{
	echo "<script>inactiveStatus();</script>";
	echo "<script>stoploadingBar();</script>";
}

public function passSession()
{
	echo "<script>stoploadingBar();</script>";
	session_start();
	$_SESSION['id'] = $array[0];
	$_SESSION['user'] = $username;
}


public function wrongInputs()
{
echo "<script>wrongInputs();</script>";
	echo "<script>stoploadingBar();</script>";


}



}
?>