<?php

/**
* 
*/

include_once "../views/view_class.php";

class postClass
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