<?php

/**
* 
*/

include_once "job_view_class.php";

class jobsClass
{	
	public function __construct()
	{
		# code...
		$name=$_GET["control"];
		include "job_view.php";
		$obj= new $name;
		$obj->$_GET["func"]();
		
	}
}
?>