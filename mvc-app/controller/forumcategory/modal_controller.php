<?php
date_default_timezone_set("Asia/Manila"); 
$date = date('Y-m-d H:i:s');

	include_once "post.php";
	if (isset($_POST['btnpost']))
		{	
		$param = array(
				"postID" => "null",
				"postTitle" => $_POST['title'],
				"postDesc" => $_POST['desc'],
				"userID" => $_SESSION['id'],
				"topicID" => $_GET['topicid'],
				"datePosted" => $date,
				"postStatus" => 1,
				);		
				$query = new post;
				$query->create("tblpost", $param);
		}
		
		
	include_once "topic.php";
	if (isset($_POST['btntopic']))
		{	
		$param = array(
				"topicID" => "null",
				"topicTitle" => $_POST['title'],
				"topicDesc" => "",
				"dateCreated" => $date,
				"forumCatID" => $_POST["cbocategory"],
				"topicStatus" => 1,
				);		
				$query = new topic;
				$query->create("tbltopic", $param);
		}
		
?>