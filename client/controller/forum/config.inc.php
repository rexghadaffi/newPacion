<?php

$db_username 		= 'root'; //database username
$db_password 		= ''; //dataabse password
$db_name 			= 'db_alumni'; //database name
$db_host 			= 'localhost'; //hostname or IP

/*
$db_username 		= 'favors_nonoy'; //database username
$db_password 		= 'boysti'; //dataabse password
$db_name 			= 'favors_mjballoon'; //database name
$db_host 			= 'localhost'; //hostname or IP
*/

$mysqli_conn = new mysqli($db_host, $db_username, $db_password,$db_name);

if ($mysqli_conn->connect_error) {
    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
}
?>