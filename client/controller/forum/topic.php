<?php
class topic extends ForumViewClass
{
	function display()
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("topic", $obj->selectById("tbltopic", "topicID", $_GET["topicid"]));
	}      
}
?>