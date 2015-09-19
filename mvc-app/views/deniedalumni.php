<?php
include "../core/init.php";
include "../core/database.php";
redirect();
?>
<?php 
include '../shared-layouts/_Layout.php'; 
include 'modals/client_user.php';
?>
<link rel="stylesheet" type="text/css" href="../shared-resources/media/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="../shared-resources/resources/metisMenu/metisMenu/metisMenu.min.css">

<form method="post">
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">           
            <!--<div class="btn-group pull-right">
               <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-wrench fa-fw"></span>&nbsp;Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#clientModal">Add Record</a></li>
                               
                </ul>
            </div>-->
        </div>
        <div class="panel-body">

            <!-- Data Table Goes Here-->
             <table class="table table-striped " id="dataTables-example" style="font-size:10px; padding:2px">
                <thead>
                    <tr>                    
                        <th>Student No.</th>                        
						<th>First Name</th>
						<th>Last Name</th>							
                        <th>Status</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>               
                <tbody>
<?php 
$result = mysqli_query($con, "SELECT * FROM tblclientuser where userStatus = 3");
       while($row = mysqli_fetch_array($result))
 
	{
		echo '<tr>';		
		echo '<td> '.$row["userName"].' </td>';		
		echo '<td> '.$row["userFirstName"].' </td>';
		echo '<td> '.$row["userLastName"].' </td>';	
	    if ($row["userStatus"] == 1) {
        echo '<td><label class="label label-success">Active</label></td>';  
        }
        else {
        echo '<td><label class="label label-danger">InActive</label></td>';             
        }
           
		echo '<td><a href="viewalumni.php?id='.$row["userID"].'"><big>View</a></td>';
        echo '<td align="center"><button type="submit" class="btn btn-success" name="A'.$row["userID"].'">Approve</button>';	
		echo '</tr>';		
	    
        if(isset($_POST['A'.$row['userID']]))
                {    
                  $result1 = mysqli_query($con,"UPDATE tblclientuser SET userStatus='1'where userID=".$row['userID']."");
                date_default_timezone_set('Asia/Manila');  
                                $currentdate = date("Y/m/d"); 
                                $currentTime = date("g:i:s a");
                                $timestamp= date('Y-m-d G:i:s');
            $id= $_SESSION['id'];               
            $remark = 'approve alumni <span style="color:green;font-weight:bold;">"'.$row["userName"].'"</span>(manual verification)';
            $result= mysqli_query($con,"INSERT INTO tblaudit (userID, auditDateTime, auditRemarks) VALUES ('$id','$timestamp', '$remark')");
        
                echo "<script>                  
                {                                                       
                    window.location.href='deniedalumni.php';                                    
                }
                </script>";
                }
	}
?>
                </tbody>
            </table>
            <!-- End Data Table-->
        </div>
    </div>

</div>
</form>
<script type="text/javascript" src="../shared-resources/dataTables/jquery.dataTables.js"></script>
<script src="../shared-resources/metisMenu/metisMenu.min.js"></script>
<script src="../shared-resources/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });

</script>
