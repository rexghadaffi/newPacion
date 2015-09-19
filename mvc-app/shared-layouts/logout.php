<?php
    include "../core/database.php";

session_start();
  date_default_timezone_set('Asia/Manila');  
                                $currentdate = date("Y/m/d"); 
                                $currentTime = date("g:i:s a");
                                $timestamp= date('Y-m-d G:i:s');
            $id= $_SESSION['id'];               
            $remark = 'admin log-out <span style="color:red; font-weight:bold;">"'.$_SESSION['user'].'"</span>';
            $result= mysqli_query($con,"INSERT INTO tblaudit (userID, auditDateTime, auditRemarks) VALUES ('$id','$timestamp', '$remark')");

session_destroy();
echo "<script>window.location.href='../'</script>";

?>