<!-- Employee Form Sample -->

<div class="modal fade" id="usertypeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #87CEFA">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New User Type</h4>
      </div>
			<form method="post">
		  <div class="modal-body">

	    	<div class="form-group">
				<label for="txtusername">Type Name</label>
				<input type="text"  class="form-control" name="txttypename">
			</div>
						
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success" name="btnadd">Add New</button>
		  </div>
<?php		  
 if(isset($_POST["btnadd"]))
 {	
		include_once '../controller/usertype/usertype_edit_record.php';
		$array = array(
		"typeID" => "null",
		"typeName" => $_POST["txttypename"]	
		);
		$obj = new usertype_edit_record;
		$obj->create($array);			
 }
?>			 
		</div>  
	  </form>
    </div>
  </div>
</div>
