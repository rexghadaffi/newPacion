<?php
$con = mysqli_connect("localhost","root","","db_alumni") or die (mysqli_error($con));
$notifquery = mysqli_query($con,"select * from tblpost limit 50") or die (mysqli_error($notifquery));
$count = mysqli_num_rows($notifquery);
$row = array();
while ($r = mysqli_fetch_array($notifquery))
{
	$row['result'][] = array('id' => $r["postID"],
				   'username' => $r["postTitle"]);	
}
echo json_encode($row);					  
?>