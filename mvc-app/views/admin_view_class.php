<?php

/**
* 
*/
class AdminViewClass
{
	public $arr=array();
	
	function show()
	{
		extract($this->arr);
		include_once "../views/admin/".$_GET['control'].".html";
	}

	function assign($name, $value)
	{
		$this->arr[$name]=$value;
	}

	public function __destruct()
	{		
		$this->show();
	}
}

?>