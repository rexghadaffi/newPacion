<?php 

class ActivityViewClass
{
	public $arr=array();
	
	function show()
	{
		extract($this->arr);
		include_once "activities.html";
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