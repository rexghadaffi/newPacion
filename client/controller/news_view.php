<?php
class view_record extends NewsViewClass
{
	function listall()
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("cont", $obj->select("tblnews where newsStatus=1 order by datePosted desc "));		
	}           
}
?>