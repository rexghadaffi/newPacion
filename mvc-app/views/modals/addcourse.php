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
		$result= mysqli_query($con,"INSERT INTO tblcourse (courseName, courseStatus) VALUES ('".$_POST["course"]."',1')");	

		 date_default_timezone_set('Asia/Manila');  
								$currentdate = date("Y/m/d"); 
								$currentTime = date("g:i:s a");
								$timestamp= date('Y-m-d G:i:s');
			$id= $_SESSION['id'];				
			$remark	= 'add new course <span style="color:green;font-weight:bold;">"'.$_POST["course"].'"</span>';
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