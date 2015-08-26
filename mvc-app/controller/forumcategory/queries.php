<?php
class query extends CategoryViewClass
{
	function posts($val)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$result = $obj->CountRow("tblpost", "topicID", $val);
		if($result == 0)
		{	
			return 0; 
		}
		else
		{
			return $result;
		}	
	}    

	function replies($val)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$result = $obj->CountRow("tblreply", "postID", $val);
		if($result == 0)
		{	
			return 0; 
		}
		else
		{
			return $result;
		}
	}  

	function getUser($val)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$result = $obj->selectColumn("userFirstName", "tblclientuser", "userID", $val);
		return $result;		
	}
	
	function getImage($val, $table)
	{
		include_once "../../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$result = $obj->selectColumnImage("userImage", $table, "userID", $val);
		return $result;		
	}
}
?>