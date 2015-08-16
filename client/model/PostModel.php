<?php
class InsertTopic

{

	private $title;
	private $description;
	private $uid;
	private $tid;
	private $db;
	private $param;
	

function __construct($title, $description, $uid, $tid)

{	
	$this->SetData($title, $description, $uid, $tid);
	$this->ConnectDB();
	$this->InsertData();

}

private function SetData($title, $description, $uid, $tid)
{
 $this->title = $title;
 $this->description = $description;
 $this->uid = $uid;
 $this->tid = $tid;
 
 $this->param = array(
		"postID" => "null",
		"postTitle" => $this->title,
		"postDesc" => $this->description,
		"userID" => $this->uid,
		"topicID" => $this->tid,
		"datePosted" => "10/10/1001",
		);
 }

private function ConnectDB()
{
	include "../data-access/mysql-db.php";
    $this->db = new DataAccessLayer;
}

public function InsertData()
{
$this->db->insert("tblpost", $this->param);	
}
}

?>