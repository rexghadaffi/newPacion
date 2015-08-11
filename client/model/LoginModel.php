<?php
class LoginUser

{

	private $username;
	private $password;
	private $tableName;
	private $db;
	

function __construct($username, $password, $tablename)

{	
	$this->SetData($username, $password, $tablename);
	$this->ConnectDB();
	$this->GetData();

}

private function SetData($username, $password, $tablename)
{

 $this->username = $username;
 $this->password = $password;
 $this->tableName = $tablename;
}

private function ConnectDB()
{

	include "../data-access/mysql-db.php";
    $this->db = new DataAccessLayer;
}

public function GetData()
{
   
return $this->db->GetUserDetails($this->username, $this->password, $this->tableName);	

}



}

?>