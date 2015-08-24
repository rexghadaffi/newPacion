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
}
?>