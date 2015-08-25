<?php
class page extends CategoryViewClass
{
	function display()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("forumcategory", $obj->select("tblforumcategory"));
		$this->assign("topic", $obj->select("tbltopic"));
		$this->assign("category",$obj->select("tblforumcategory"));
	}      
}
?>