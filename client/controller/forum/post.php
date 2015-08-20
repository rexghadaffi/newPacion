<?php
class post extends ForumViewClass
{
	function display()
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("user", $obj->selectById("tblclientuser", "userID", $_GET["uid"]));
		$this->assign("posts", $obj->select("tblpost"));
	}  

	public function create($tablename, $param)
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$obj->insert($tablename, $param);	
		echo '<script type="text/javascript">window.location="forum.php?page=topic&action=display&topicid='.$_GET["topicid"].'"</script>';
	}
}
?>