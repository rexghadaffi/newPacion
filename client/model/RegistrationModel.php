<?php
class LoginUser

{

	private $username;
	private $password;
	private $firstName;
	private $lastName;
	private $contactNumber;
	private $course;
	private $yearGrad;
	private $email;
	private $tableName;
	private $db;
	

function __construct($username, $password, $firstName, $lastName, $contactNumber, $course, $yearGrad, $email $tablename)

{	
	$this->SetData($username, $password, $firstName, $lastName, $contactNumber, $course, $yearGrad, $email $tablename);
	$this->ConnectDB();
	$this->GetData();

}

private function SetData($username, $password, $firstName, $lastName, $contactNumber, $course, $yearGrad, $email $tablename)
{

 $this->username = $username;
 $this->password = $password;
 $this->tableName = $tablename;
 $this->firstName = $firstName;
 $this->lastName = $lastName;
 $this->contactNumber = $contactNumber;
 $this->course = $course;
 $this->yearGrad = $yearGrad;
 $this->email = $email;
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