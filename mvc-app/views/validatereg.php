<?php
include "../core/init.php";
include "../core/database.php";
redirect();
?>
<?php
include '../shared-layouts/_Layout.php';
?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">           
           
                   <h3>Alumni Clients</h3>
                
            
        </div>
        
        <div class="panel-body">
        <form method="post" enctype="multipart/form-data">
            <!-- Data Table Goes Here-->
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>                    
                        <th>First Name</th>
                        <th>Last Name</th> 
                        <th>Course</th> 
                        <th>Year Graduated</th>                          
                        <th style="text-align:center">Action</th>
                    </tr>
                </thead>               
                
<?php 
              $result5 = mysqli_query($con, "SELECT * FROM tblclientuser where userStatus=0 ");
              while($row5 = mysqli_fetch_array($result5))
    {
        echo '<tr>';        
        echo '<td> '.$row5["userFirstName"].' </td>';
        echo '<td> '.$row5["userLastName"].' </td>';
        echo '<td> '.$row5["userCourse"].' </td>';
        echo '<td> '.$row5["userYearGrad"].' </td>';
        echo '<td align="center"><button type="submit" class="btn btn-success" name="A'.$row5["userID"].'">Approve</button>&nbsp;&nbsp;<button type="submit" class="btn btn-danger" name="D'.$row5["userID"].'">Deny</button></td>';  
        echo '</tr>';
       
        if(isset($_POST['A'.$row5['userID']]))
                {    
                  $result1 = mysqli_query($con,"UPDATE tblclientuser SET userStatus='1'where userID=".$row5['userID']."");
                echo "<script>                  
                {                                                       
                    window.location.href='validatereg.php';                                    
                }
                </script>";
                } 

        if(isset($_POST['D'.$row5['userID']]))
                {    
                  $result1 = mysqli_query($con,"UPDATE tblclientuser SET userStatus='3'where userID=".$row5['userID']."");
                echo "<script>                  
                {                                                       
                    window.location.href='validatereg.php';                                    
                }
                </script>";
                } 
    }
       
?> 
            
            </table>
            <!-- End Data Table-->
            </form>
        </div>
    </div>
 </div>

