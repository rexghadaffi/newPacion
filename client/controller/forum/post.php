<?php
class post extends ForumViewClass
{
	function display()
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("replies", $obj->selectColumnWhereStatus("tblreply", "postID", $_GET["postid"], "replyStatus"));
		$this->assign("postresult", $obj->selectById("tblpost", "postID", $_GET["postid"]));		
	}  

	public function create($tablename, $param)
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$obj->insert($tablename, $param);	
		echo '<script type="text/javascript">window.location="forum.php?page=topic&action=display&topicid='.$_GET["topicid"].'"</script>';
	}
	
	public function add($tablename, $param)
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$obj->insert($tablename, $param);	
		echo '<script type="text/javascript">window.location="forum.php?page=post&action=display&postid='.$_GET["postid"].'"</script>';
	}	
}
?>