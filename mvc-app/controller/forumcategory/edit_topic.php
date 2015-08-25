<?php
class edit_topic extends CategoryViewClass
{
	function edit()
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;	
		$this->assign("topic", $obj->selectById("tbltopic", "topicID", $_GET["id"]));		
	}
	
	public function updateinfo($clientarr, $column, $id)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;		
		$obj->updateWhere("tbltopic", $clientarr, $column, $id);	
	}
}

?>