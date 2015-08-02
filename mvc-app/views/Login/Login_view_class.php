<?php

/**
* 
*/
class LoginViewClass
{
	public $arr=array();
	


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