<?php

/**
* 
*/

include_once "../views/activities_view_class.php";

class activityClass
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