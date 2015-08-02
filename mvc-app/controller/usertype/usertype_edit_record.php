<?php
class usertype_edit_record extends UserTypeViewClass
{
	function edit()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;	
		$this->assign("clientinfo", $obj->selectById("tblusertype", "typeID", $_GET["id"]));		
	}
	
	public function updateinfo($clientarr, $column, $id)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->updateWhere("tblusertype", $clientarr, $column, $id);	
	}
	
	public function create($typearr)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->insert("tblusertype", $typearr);	
	}
	
}
?>