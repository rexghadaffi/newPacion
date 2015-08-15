<?php

/**
* 
*/ class NewsViewClass
{
	public $arr=array();
	
	function show()
	{
		extract($this->arr);
		include_once "news.html";
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