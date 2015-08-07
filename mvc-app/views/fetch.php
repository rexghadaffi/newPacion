<?php
$con = mysqli_connect("localhost","root","","db_alumni") or die (mysqli_error($con));
$notifquery = mysqli_query($con,"select * from tblclientuser") or die (mysqli_error($notifquery));
$count = mysqli_num_rows($notifquery);
$row = array();
while ($r = mysqli_fetch_array($notifquery))
{
	$row['data'][] = array('id' => $r["userID"],
				   'username' => $r["userName"]);	
}
echo json_encode($row);					  
?>