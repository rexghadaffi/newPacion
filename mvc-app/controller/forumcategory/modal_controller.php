
<?php
	include_once "post.php";
	if (isset($_POST['btnpost']))
		{	
		$param = array(
				"postID" => "null",
				"postTitle" => $_POST['title'],
				"postDesc" => $_POST['desc'],
				"userID" => $_SESSION['id'],
				"topicID" => $_GET['topicid'],
				"datePosted" => "",
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
				"topicDesc" => $_POST['desc'],
				"dateCreated" => "",
				"forumCatID" => $_GET["catid"],
				"topicStatus" => 1,
				);		
				$query = new post;
				$query->create("tbltopic", $param);
		}
?>