<?php

/**
* 
*/
class JobViewClass
{
	public $arr=array();
	
	function show()
	{
		extract($this->arr);
		include_once "../views/jobs/".$_GET['control'].".html";
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