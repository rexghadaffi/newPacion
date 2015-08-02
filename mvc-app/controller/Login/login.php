<?php


class Login {
	private $username;
	private $password;

function __construct($username, $password)

{
	$this->setData($username, $password);
	$this->connectDB();

}

private function setData($username, $password)
{

$this->username = $username;
$this->passowrd = $password;

}

private function connectDB()
{

	include "login_record.php";
	new login_view_record();

}
function getData()
{
	$query = "SELECT * FROM tbladminaccounts WHERE adminUsername = '$this->username' && adminPassword = '$this->password'";
	$sql = mysqli_query($query);
	if(mysqli_num_rows($sql) > 0)
	{

		return true;

	}
	else
	{

		throw new Exception("Invalid");
	}



}



// $op = $_REQUEST['btnlogin'];
// $user_controller = new login_view_record();

// if ($op)
// {
// 		$username = $_POST['user'];
// 		$password =  $_POST['pass'];
// 	if ($this->login($username, $password))
// 	{
// 		echo "<script>window.location.href='Home.php';</script>";


// 	}
// 	else
// 	{
// 		echo "<script>window.location.href='Index.php?err=1';</script>";


// 	}







}

?>