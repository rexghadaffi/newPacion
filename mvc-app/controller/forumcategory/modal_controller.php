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
				"postLevel" => $_SESSION['level'],				
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
				"topicDesc" => $_POST['content'],
				"dateCreated" => $date,
				"forumCatID" => $_POST["cbocategory"],
				"topicStatus" => 1,
				);		
				$query = new topic;
				$query->create("tbltopic", $param);
		}
		
	include_once "post.php";
	if (isset($_POST['btnreply']))
		{	
		$param = array(
				"replyID" => "null",
				"replyContent" => $_POST['message'],
				"postID" => $_GET["postid"],
				"userID" => $_SESSION["id"],
				"datePosted" => $date,
				"replyLevel" => $_SESSION["level"],		
				"replyStatus" => 1,					
				);		
				$query = new post;
				$query->add("tblreply", $param);
		}
		
?>