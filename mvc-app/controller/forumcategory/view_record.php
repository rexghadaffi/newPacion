<?php
class view_record extends CategoryViewClass
{
	function listall()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("forumcategory", $obj->select("tblforumcategory f right join tbltopic t on f.forumCatID= t.forumCatID"));		
	}
}
?>