<?php
class edit_category extends CategoryViewClass
{
	function edit()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;	
		$this->assign("forumcategory", $obj->selectById("tblforumcategory", "forumCatID", $_GET["id"]));		
	}
	
	public function updateinfo($clientarr, $column, $id)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->updateWhere("tblforumcategory", $clientarr, $column, $id);	
	}
	
	public function create($clientarr)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->insert("tblforumcategory", $clientarr);	
	}	
}

?>