<?php

/**
* 
*/

include_once "../views/admin_view_class.php";

class adminClass
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