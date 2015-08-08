<?php
$con = mysqli_connect("localhost","root","","db_alumni");

$username = "admin";
$password = "admin";


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