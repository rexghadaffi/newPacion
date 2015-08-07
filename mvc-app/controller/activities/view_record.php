<?php
class view_record extends ActivityViewClass
{
	function listall()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("activities", $obj->select("tblactivity"));		
	}           
}
?>