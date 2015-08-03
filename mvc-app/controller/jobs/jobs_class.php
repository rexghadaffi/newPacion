<?php

/**
* 
*/

include_once "../views/job_view_class.php";

class jobsClass
{	
	public function __construct()
	{
		# code...
		$name=$_GET["control"];
		include $name.".php";
		$obj= new $name;
		$obj->$_GET["func"]();
		
	}
}
?>