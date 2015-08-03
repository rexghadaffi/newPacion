<?php
class jobs_edit_record extends JobViewClass
{
	function edit()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;	
		$this->assign("jobs", $obj->selectById("tbljob", "jobID", $_GET["id"]));		
	}
	
	public function updateinfo($clientarr, $column, $id)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->updateWhere("tbljob", $clientarr, $column, $id);	
	}
	
	public function create($typearr)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->insert("tbljob", $typearr);	
	}
	
}
?>