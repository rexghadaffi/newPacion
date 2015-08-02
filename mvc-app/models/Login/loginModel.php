<?php


class Login 

{

	private $username;
	private $password;
	private $db;

function __construct()

{
	$this->setData();
	$this->connectDB();

	

}

private function setData()
{

// $this->username = $username;
//$this->passowrd = $password;

}

private function connectDB()
{

	include_once "../../../data-access/mysql-db.php";
		$this->db = new DataAccessLayer;


}

function getData()
{
	
   //return $this->db->selectLogin("tblcompanyuser", "adminUsername", $this->username, "adminPassword", $this->password);

return $result = $this->db->select("tblcompanyuser");
	
//	return $this->db->totalRows("*", tblcompanyuser);
	// $query = "SELECT * FROM tbladminaccounts WHERE adminUsername = '$this->username' AND adminPassword = '$this->password'";
	// $sql = $this->db->mysqli_query($query);
	// if (mysqli_num_rows($sql) > 0)
	// {

	// 	return true;

	// }

	// else
	// {

	// 	throw new Exception("Invalid");
	// }



}



}

?>