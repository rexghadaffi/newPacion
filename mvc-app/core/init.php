<?php
session_start();

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

function redirect()
{

if (logged_in() === false)
{

echo "<script>window.location='backend.php'; </script>";

}

}


?>