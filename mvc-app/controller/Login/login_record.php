<?php
class view_record extends LoginViewClass
{
	function checkAdmin()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("checkAdmin", $obj->select("tbladminaccounts"));		
	}      


}
?>