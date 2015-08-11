<?php

class UserController
{


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