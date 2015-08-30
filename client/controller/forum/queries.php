<?php
class query extends ForumViewClass
{
	function posts($val)
	{
		include_once "../data-access/mysql-db.php";
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
		include_once "../data-access/mysql-db.php";
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

	function getUser($val, $level)
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		if($level == 1)
		{
			$result = $obj->selectColumn("userName", "tblcompanyuser", "userID", $val, $level);			
		}
		else
		{
			$result = $obj->selectColumn("userFirstName", "tblclientuser", "userID", $val, $level);							
		}	
		return $result;		
	}
	
	function getImage($val, $level)
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		if($level == 1)
		{	
		$result = $obj->selectColumnImage("userImage", "tblcompanyuser", "userID", $val);
		}
		else 
		{	
		$result = $obj->selectColumnImage("userImage", "tblclientuser", "userID", $val);
		}			
		return $result;		
	}

}
?>