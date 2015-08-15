<?php

/**
* 
*/

include_once "news_view_class.php";

class newsClass
{	
	public function __construct()
	{
		# code...
		$name=$_GET["control"];
		include "news_view.php";
		$obj= new $name;
		$obj->$_GET["func"]();
		
	}
}
?>