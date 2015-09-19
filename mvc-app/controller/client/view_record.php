<?php
class view_record extends ClientViewClass
{
	function listall()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("cont", $obj->select("tblclientuser where userStatus = 1"));	
		$this->assign("type", $obj->select("tblusertype"));		
	}
}
?>