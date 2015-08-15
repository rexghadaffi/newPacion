<?php

/**
* 
*/

include_once "overall_class.php";

class forumClass
{	
	public function __construct()
	{
		# code...
		$name=$_GET["page"];
		include "page.php";
		$obj= new $name;
		$obj->$_GET["action"]();
		
	}
}
?>