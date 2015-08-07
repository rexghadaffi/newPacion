<!-- Employee Form Sample -->

<div class="modal fade" id="topicsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #87CEFA">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Topic</h4>
      </div>
			<form method="post">
		  <div class="modal-body">

	    	<div class="form-group">
				<label for="txttopictitle">Topic Title</label>
				<input type="text"  class="form-control" name="txttopictitle">
			</div>


	    	<div class="form-group">
				<label for="txttopicdesc">Topic Description</label>
				<input type="text"  class="form-control" name="txttopicdesc">
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
		include_once '../controller/topics/topics_edit_record.php';
		$array = array(
		"topicID" => "null",
		"topicTitle" => $_POST["txttopictitle"],
		"topicDesc" => $_POST["txttopicdesc"],
		"dateCreated" => $_POST["txtdate"]	
		);
		$obj = new topics_edit_record;
		$obj->create($array);	

		echo "<script>					
												  { 
										 			    						
	 													window.location.href='topics_record.php?control=view_record&func=listall';
											
		
												  }
	 												   </script>";			
 }
?>			 
		</div>  
	  </form>
    </div>
  </div>
</div>
