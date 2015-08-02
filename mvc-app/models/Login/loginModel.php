<?php


class Login 

{

	private $username;
	private $password;
	private $tableName;
	private $db;

function __construct()

{	
	$this->ConnectDB();

}

public function SetData($user_name, $user_password, $table_name)
{

 $this->username = $user_name;
 $this->password = $user_password;
 $this->tableName = $table_name;
}

private function ConnectDB()
{

	include_once "../../../data-access/mysql-db.php";
    $this->db = new DataAccessLayer;
}

function GetData()
{
   

return $this->db->GetUserDetails($this->username, $this->password, $this->tableName);	

}



}

?>