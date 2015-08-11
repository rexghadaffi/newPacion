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



?>