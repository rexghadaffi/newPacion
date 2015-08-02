<?php
class edit_post extends PostViewClass
{

	function edit()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;	
		$this->assign("post", $obj->selectById("tblpost", "postID", $_GET["id"]));		
	}
	
	public function updateinfo($postarr, $column, $id)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->updateWhere("tblpost", $postarr, $column, $id);	
	}
	
	public function create($postarr)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->insert("tblpost", $postarr);	
	}
	
}

?>