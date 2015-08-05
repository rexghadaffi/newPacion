<?php

/**
* 
*/

include_once "../views/news_view_class.php";

class newsClass
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