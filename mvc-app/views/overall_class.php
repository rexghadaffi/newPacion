<?php

/**
* 
*/ class ForumViewClass
{
	public $arr=array();
	
	function show()
	{
		extract($this->arr);
		include_once "".$_GET["page"].".html";
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