<!-- Employee Form Sample -->

<div class="modal fade" id="jobModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #87CEFA">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Job</h4>
      </div>
			<form method="post">
		  <div class="modal-body">

	    	<div class="form-group">
				<label for="txtjobname">Job Title</label>
				<input type="text"  class="form-control" name="txtjobname">
			</div>

			<div class="form-group">
				<label for="txtjobdesc">Job Description</label>
				<input type="text"  class="form-control" name="txtjobdesc">
			</div>

			<div class="form-group">
				<label for="txtdate">Date</label>
				<input type="text"  class="form-control" name="txtdate">
			</div>
						
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success" name="btnadd">Add New</button>
		  </div>
<?php		  
 if(isset($_POST["btnadd"]))
 {	
		include_once '../controller/jobs/jobs_edit_record.php';
		$array = array(
		"jobID" => "null",
		"jobTitle" => $_POST["txtjobname"],	
		"jobDesc" => $_POST["txtjobdesc"],	
		"datePosted" => $_POST["txtdate"]	
		);
		$obj = new jobs_edit_record;
		$obj->create($array);			
 }
?>			 
		</div>  
	  </form>
    </div>
  </div>
</div>
