<!-- Employee Form Sample -->

<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #87CEFA">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New News</h4>
      </div>
			<form method="post">
		  <div class="modal-body">

	    	<div class="form-group">
				<label for="txtnewstitle">News Title</label>
				<input type="text"  class="form-control"required name="txtnewstitle" placeholder="Enter the title here..">
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
				<label for="txtnewsdesc">News Description</label>
				<textarea name="txtnewsdesc" cols="50" style="height:300px; padding:100px"></textarea>';
			</div>
						
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success" name="btnadd">Add New</button>
		  </div>
<?php		  
 if(isset($_POST["btnadd"]))
 {	
		include_once '../controller/news/news_edit_record.php';
		$array = array(
		"newsID" => "null",
		"newsTitle" => $_POST["txtnewstitle"],
		"newsDesc" => $_POST["txtnewsdesc"],
		"datePosted" => $_POST["txtdate"]	
		);
		$obj = new news_edit_record;
		$obj->create($array);

		echo "<script>					
												  { 
										 			    						
	 													window.location.href='news_record.php?control=view_record&func=listall';
											
		
												  }
	 												   </script>";			
 }
?>			 
		</div>  
	  </form>
    </div>
  </div>
</div>
