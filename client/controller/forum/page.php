<?php
class page extends ForumViewClass
{
	function display()
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("forumcategory", $obj->select("tblforumcategory"));
		$this->assign("topic", $obj->selectColumnWhere("tbltopic", "topicStatus", 1));
		$this->assign("latest",$obj->select("tbltopic limit 8"));
	}      
}
?>