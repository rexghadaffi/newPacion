<?php
class topic extends ForumViewClass
{
	function display()
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("topic", $obj->selectById("tbltopic", "topicID", $_GET["topicid"]));
		$this->assign("posts", $obj->select("tblpost"));		
	}  

	function create($tablename, $param)
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->insert($tablename, $param);	
		echo '<script type="text/javascript">window.location="forum_record.php?page=page&action=display"</script>';		
	}
}
?>