<?php


class Login 

{

	private $username;
	private $password;
	private $db;

function __construct($username, $password)

{
	$this->setData($username, $password);
	$this->connectDB();
	$this->getData();

}

private function setData($username, $password)
{

$this->username = $username;
$this->passowrd = $password;

}

private function connectDB()
{

	include_once "../../../data-access/mysql-db.php";
		$this->db = new DataAccessLayer();


}

function getData()
{

$this->db->selectLogin("tbladminaccounts", "adminUsername", $this->username, "adminPassword", $this->password);
	
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