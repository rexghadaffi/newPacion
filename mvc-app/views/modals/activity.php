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
			
			<div class="form-group">
				<label for="exampleInputFile">Browse Image</label>
				<input type="file" id="fileActivityImage">
				<p class="help-block">Example block-level help text here.</p>
			</div>
			
			<div>
				<label for="txtDescription">News Description</label>
				<textarea name="txtDescription" cols="50" style="height:300px; padding:100px"></textarea>';
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
		"activityImage" => "none",
		"userID" => 0
		);
		
		$obj = new activities_edit_record;
		$obj->create($array);	

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