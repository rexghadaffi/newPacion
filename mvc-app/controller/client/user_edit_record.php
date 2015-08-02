<?php
class user_edit_record extends ClientViewClass
{

	function edit()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;	
		$this->assign("clientinfo", $obj->selectById("tblclientuser", "userID", $_GET["id"]));		
	}
	
	public function updateinfo($clientarr, $column, $id)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->updateWhere("tblclientuser", $clientarr, $column, $id);	
	}
	
	public function create($clientarr)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->insert("tblclientuser", $clientarr);	
	}
	
}

?>