<?php
class view_record extends CategoryViewClass
{
	function listall()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("forumcategory", $obj->select("tblforumcategory"));	
	}
	
	public function subquery($name, $catid)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("topic", $obj->selectColumnWhere("tbltopic", "forumCatID", 1));				
	}
}
?>