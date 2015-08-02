<?php
class view_record extends PostViewClass
{
	function listall()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("post", $obj->select("tblpost"));		
	}
}
?>