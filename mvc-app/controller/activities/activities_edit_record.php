<?php
class activities_edit_record extends ActivityViewClass
{

	function edit()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;	
		$this->assign("activities", $obj->selectById("tblactivity", "activityID", $_GET["id"]));		
	}
	
	public function updateinfo($clientarr, $column, $id)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->updateWhere("tblactivity", $clientarr, $column, $id);	
	}
	
	public function create($activityarr)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->insert("tblactivity", $activityarr);	
	}
	
}

?>