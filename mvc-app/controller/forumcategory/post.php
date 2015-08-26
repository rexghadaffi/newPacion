<?php
class post extends CategoryViewClass
{
	function display()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("replies", $obj->selectColumnWhere("tblreply", "postID", $_GET["postid"]));
		$this->assign("postresult", $obj->selectById("tblpost", "postID", $_GET["postid"]));		
	}  

	public function create($tablename, $param)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$obj->insert($tablename, $param);	
		echo '<script type="text/javascript">window.location="forum_record.php?control=topic&func=display&topicid='.$_GET["topicid"].'"</script>';
	}
	
	public function add($tablename, $param)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$obj->insert($tablename, $param);	
		echo '<script type="text/javascript">window.location="forum_record.php?control=post&func=display&postid='.$_GET["postid"].'"</script>';
	}
	
	
}
?>