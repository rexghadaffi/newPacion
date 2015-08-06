<?php
$con = mysqli_connect("localhost","root","","db_alumni");

$username = $_POST['username'];
$password = $_POST['password'];


$sql = mysqli_query($con, "SELECT * FROM tblcompanyuser where userName = '".$username."' AND userPassword = '".$password."' ");
$num_rows = mysqli_num_rows($sql);
if ($num_rows == 1)
{
	echo 1;
	
	
}
else
{
	echo 0;
	
}


?>