<?php
class news_edit_record extends NewsViewClass
{
	function edit()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;	
		$this->assign("news", $obj->selectById("tblnews", "newsID", $_GET["id"]));		
	}
	
	public function updateinfo($clientarr, $column, $id)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->updateWhere("tblnews", $clientarr, $column, $id);	
	}
	
	public function create($typearr)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->insert("tblnews", $typearr);	
	}
	
}
?>