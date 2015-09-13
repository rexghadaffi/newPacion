<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header custom-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Forum Category</h4>
      </div>
			<form method="post">
		  <div class="modal-body">

	    	<div class="form-group">
				<label for="txtcategory">Category Name</label>
				<input type="text"  class="form-control" name="txtcategory">
			</div>
						
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success" name="btnadd">Add New</button>
		  </div>
<?php		  
 if(isset($_POST["btnadd"]))
 {	
		$date = "";
		include_once '../controller/forumcategory/edit_record.php';
		$array = array(
		"forumCatID" => "null",
		"forumCatTitle" => $_POST["txtcategory"],
		"forumCatDesc" => "",
		"dateCreated" => $date,
		"forumCatStatus" => 1		
		);
		$obj = new edit_record;
		$obj->create($array);

		echo "<script>					
												  { 
	 													window.location.href='forum_record.php?control=page&func=display';		
												  }
	 												   </script>";	
					
 }
?>			 
		</div>  
	  </form>
    </div>
  </div>
</div>
