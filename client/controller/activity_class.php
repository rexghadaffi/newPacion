<?php

/**
* 
*/

include_once "activities_view_class.php";

class activityClass
{	
	public function __construct()
	{
		# code...
		$name=$_GET["control"];
		include "activity_view.php";
		$obj= new $name;
		$obj->$_GET["func"]();
	}
}
?>