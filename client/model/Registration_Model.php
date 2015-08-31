<?php
class RegistrationUser

{

	private $FirstName;
	private $Lastname;
	private $Contact;
	private $course;
	private $year;
	private $gender;
	private $address;
	private $email;
	private $username;
	private $password;
	private $db;
	

function __construct($username, $password, $FirstName, $Lastname, $gender, $Contact, $address, $email, $course, $year)

{	
	$this->SetData($username, $password, $FirstName, $Lastname, $gender, $Contact, $address, $email, $course, $year);
	$this->ConnectDB();
	$this->GetData();

}

private function SetData($username, $password, $FirstName, $Lastname, $gender, $Contact, $address, $email, $course, $year)
{

 $this->username = $username;
 $this->password = $password;
 $this->FirstName = $FirstName;
 $this->Lastname = $Lastname;
 $this->gender = $gender;
 $this->Contact = $Contact;
 $this->address = $address;
 $this->email = $email;
 $this->course = $course;
 $this->year = $year;
}

private function ConnectDB()
{

	include "../data-access/mysql-db.php";
    $this->db = new DataAccessLayer;
}

public function GetData()
{
   
return $this->db->InsertUserDetails($this->username, $this->password, $this->FirstName, $this->Lastname, $this->gender, $this->Contact, $this->address, $this->email,  $this->course, $this->year);	

}



}

?>