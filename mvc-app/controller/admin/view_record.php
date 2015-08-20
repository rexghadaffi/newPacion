<?php
class view_record extends AdminViewClass
{
	function listall()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("cont", $obj->select("tblcompanyuser join tblusertype on userTypeID=typeID"));
		$this->assign("type", $obj->select("tblusertype"));	
	}           
}
?>