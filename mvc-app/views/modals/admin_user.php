<!-- Employee Form Sample -->
<div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #87CEFA">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New User Record</h4>
      </div>
	   <form method="post">
		  <div class="modal-body">
	    	<div class="form-group">
				<label for="txtusername">Username</label>
				<input type="text" class="form-control" name="txtusername" placeholder="Username">
			</div>
			
			<div class="form-group">
				<label for="txtpassword">Password</label>
				<input type="password" class="form-control" name="txtpassword" placeholder="Password">
			</div>
						
			<div class="form-group">
				<label for="cbousertype">User Type</label>
				<select type="" class="form-control" name="cbousertype">
					<option>Select</option>
					<option>1</option>
					<option>2</option>
				</select>
			</div>						
		
			<div class="form-group">
				<label for="exampleInputFile">Browse Profile Picture</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
			</div>
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success" name="btnadd">Add New</button>
		  </div>
<?php		  
 if(isset($_POST["btnadd"]))
 {		

		include_once '../controller/admin/admin_edit_record.php';
		$array = array(
		"userID" => "null",
		"userName" => $_POST["txtusername"],
		"userPassword" => $_POST["txtpassword"],
		"userStatus" => 1,
		"userTypeID" => $_POST["cbousertype"]
		);
		
		$obj = new admin_edit_record;
		$obj->create($array);	
		
 }
?>		  
	  </form>
    </div>
  </div>
</div>