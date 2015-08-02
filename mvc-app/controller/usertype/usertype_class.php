<?php

/**
* 
*/

include_once "../views/usertype_view_class.php";

class userTypeClass
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