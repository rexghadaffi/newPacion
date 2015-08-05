<?php
class topics_edit_record extends TopicsViewClass
{
	function edit()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;	
		$this->assign("topics", $obj->selectById("tbltopic", "topicID", $_GET["id"]));		
	}
	
	public function updateinfo($clientarr, $column, $id)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->updateWhere("tbltopic", $clientarr, $column, $id);	
	}
	
	public function create($typearr)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->insert("tbltopic", $typearr);	
	}
	
}
?>