<?php

/**
* 
*/

include_once "../views/topics_view_class.php";

class topicsClass
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