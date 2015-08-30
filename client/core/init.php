<?php
session_start();

$connect_error = "Sorry were unable to connect to server";
		$con = mysqli_connect('localhost','root','','db_alumni') or die ($connect_error);

function logged_in ()
{
	if (isset($_SESSION['id']))
	{
		return true;

	}
	else
	{

	return false;
	}
}



?>