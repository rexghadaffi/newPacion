<!-- Employee Form Sample -->
<div class="modal fade" id="activityModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header custom-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Activity</h4>
      </div>
	   <form method="post">
		  <div class="modal-body">
	    	<div class="form-group">
				<label for="txtTitle">Title</label>
				<input type="text" class="form-control" name="txtTitle" required placeholder="Enter the title here..">
			</div>
			
			<?php
                   		        date_default_timezone_set('Asia/Manila');  
								$currentdate = date("Y/m/d"); 
								$currentTime = date("g:i:s a");
								$timestamp= date('Y-m-d G:i:s');
								?>

	    	<div class="form-group">
				<label for="txtdate">Date</label>
				<input type="text"  class="form-control" name="txtdate" readonly value="<?php echo $timestamp; ?>">
			</div>
			
			<div>
				<label for="txtDescription">News Description</label>
				<textarea name="txtDescription" cols="50" style="height:300px; padding:100px"></textarea>';
			</div>

			<div class="form-group col-md-4">
				<label for="cbostatus">Status</label>
				<select type="" class="form-control" name="cbostatus" >
					<option value="1">Active</option>
					<option value="0">Inactive</option>
				</select>
			</div>	

		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success" name="btnadd">Add New</button>
		  </div>


<?php		  
 if(isset($_POST["btnadd"]))
 {		

		include_once '../controller/activities/activities_edit_record.php';
		$array = array(
		"activityID" => "null",
		"activityTitle" => $_POST["txtTitle"],
		"activityDescription" => $_POST["txtDescription"],
		"activityStatus" => $_POST["cbostatus"],
		"datePosted" => $_POST["txtdate"],
		"userID" => 0
		);
		
		$obj = new activities_edit_record;
		$obj->create($array);
			include "../core/database.php";


		 date_default_timezone_set('Asia/Manila');  
								$currentdate = date("Y/m/d"); 
								$currentTime = date("g:i:s a");
								$timestamp= date('Y-m-d G:i:s');
			$id= $_SESSION['id'];				
			$remark	= 'add activity post <span style="color:green;font-weight:bold;">"'.$_POST["txtTitle"].'"</span>';
        $result= mysqli_query($con,"INSERT INTO tblaudit (userID, auditDateTime, auditRemarks) VALUES ('$id','$timestamp', '$remark')");	

		echo "<script>					
												  { 
										 			    						
	 													window.location.href='activities_record.php?control=view_record&func=listall';
											
		
												  }
	 												   </script>";
}
?>		  
	  </form>
    </div>
  </div>
</div>