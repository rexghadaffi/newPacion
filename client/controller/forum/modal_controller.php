
<?php
	include "model/PostModel.php";

	if (isset($_POST['btnpost']))
		{	
			$title = $_POST['title'];
 			$desc = $_POST['desc']; 
			$uid = $_SESSION['id'];
			$tid = $_GET['topicid'];					
						$insert = new InsertTopic($title, $desc, $uid, $tid);
						$insert->InsertData();
						echo '<script type="text/javascript">window.location=""</script>';
		}		
?>