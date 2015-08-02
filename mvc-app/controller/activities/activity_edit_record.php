<?php
class ActivityEditRecord extends ActivityViewClass
{

	function edit()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;	
		$this->assign("clientinfo", $obj->selectById("tblcompanyuser", "userID", $_GET["id"]));		
	}
	
	public function updateinfo($clientarr, $column, $id)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->updateWhere("tblcompanyuser", $clientarr, $column, $id);	
	}
	
	public function create($clientarr)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->insert("tblactivity", $activityarr);	
	}
	
}

?>