<?php 
include "../core/init.php";
include "../core/database.php";
redirect();
include '../shared-layouts/_Layout.php';
?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">          
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-wrench fa-fw"></span>&nbsp; Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#courseModal">Add Course</a></li>
                                     
                </ul>
            </div>
        </div>
        <form method="post">
        <div class="panel-body">

            <!-- Data Table Goes Here-->
            <table id="example" class="display table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>                       
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Course Status</th>
                    </tr>
                </thead>              
                <tbody>
<?php
        $result = mysqli_query($con, "SELECT * FROM tblcourse ");
        while($row2 = mysqli_fetch_array($result))
         {    
        echo '<tr>';		
		echo '<td> '.$row2["courseID"].' </td>';
        echo '<td> '.$row2["courseName"].' </td>';
        if ($row2["courseStatus"] == 1) {
        echo '<td><label class="label label-success">Active</label></td>';  
        }
        else {
        echo '<td><label class="label label-danger">InActive</label></td>';             
        }
        echo '<td align="center"><button type="submit" class="btn btn-success" name="'.$row2["courseID"].'">Change Status</button></td>';
		echo '</tr>';		
	

    if(isset($_POST[$row2['courseID']]))
                {        
                if ($row2["courseStatus"] == 1) {             
           $result1 = mysqli_query($con,"UPDATE tblcourse SET courseStatus='0'where courseID=".$row2['courseID']."");
                }
                else{
                     $result2 = mysqli_query($con,"UPDATE tblcourse SET courseStatus='1' where courseID=".$row2['courseID']."");
                }
          echo "<script>                  
                {                                                       
                    window.location.href='courses.php';                                    
                }
            </script>"; 

            }
            }

?>
                </tbody>
            </table>
        </form>
            <!-- End Data Table-->
        </div>
    </div>
</div>

<!-- Employee Form Sample -->
<div class="modal fade" id="courseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header custom-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Course</h4>
      </div>
       <form method="post">
          <div class="modal-body">
            <div class="form-group">
                <div class="form-group">
                <label for="course">Course Name</label>
                <input type="text" class="form-control" name="course" placeholder="Course Name">
            </div>
                                            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success" name="btnadd">Add New</button>
          </div>
<?php         
 if(isset($_POST["btnadd"]))
 {      

            include "../core/database.php";
        $result1= mysqli_query($con,"INSERT INTO tblcourse (courseName, courseStatus) VALUES ('".$_POST["course"]."','1')");  

         date_default_timezone_set('Asia/Manila');  
                                $currentdate = date("Y/m/d"); 
                                $currentTime = date("g:i:s a");
                                $timestamp= date('Y-m-d G:i:s');
            $id= $_SESSION['id'];               
            $remark = 'add new course <span style="color:green;font-weight:bold;">"'.$_POST["course"].'"</span>';
        $result= mysqli_query($con,"INSERT INTO tblaudit (userID, auditDateTime, auditRemarks) VALUES ('$id','$timestamp', '$remark')");    

        echo "<script>                  
                                                  { 
                                                                                
                                                        window.location.href='courses.php';
                                            
        
                                                  }
                                                       </script>";
        
 }
?>        
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
    tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons", });
</script>
</body>
</html>