<?php

class UserController
{
	public $urlclient =  "http://stialumni.3eeweb.com/mvc-app/login.php";
	public	$urladmin = "http://stialumni.3eeweb.com/mvc-app/views/backend.php";

 

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

}


public function wrongInputs()
{
echo "<script>wrongInputs();</script>";
	echo "<script>stoploadingBar();</script>";


}



}
?>