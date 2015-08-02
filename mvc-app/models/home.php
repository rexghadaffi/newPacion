<?php
class TableName
{
private $userId;
private $userName;
private $userPassword;


public function GetId()
{
return $this->userId;
}

public function SetId($user_Id)
{
$this->userId = $user_Id;
}

}


class HomeModel
{
	
	function getUser()
	{
	$con = mysqli_connect("localhost","root","","db_alumni");
	$result = mysqli_query($con, "Select * from tblactivity");
	$i=0;
	while($row[$i]= $result->fetch_array(MYSQLI_ASSOC))
	{
	$i++;
	}
	return $row;
	}
	
}

?>
