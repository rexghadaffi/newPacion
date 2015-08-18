<!-- Employee Form Sample -->
<div class="modal fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header custom-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Alumni Record</h4>
      </div>
	   <form method="post" enctype="multipart/form-data">
		  <div class="modal-body">
	    	<div class="form-group">
				<label for="txtusername">Username</label>				
				<input type="text"  class="form-control" name="txtusername" placeholder="Username">
				<!-- onkeypress="Numeric(event);" -->
			</div>
			
			<div class="form-group">
				<label for="txtpassword">Password</label>
				<input type="password" class="form-control" name="txtpassword" placeholder="Password">
			</div>
			
			<div class="form-group">
				<label for="txtfname">First Name</label>
				<input type="text" class="form-control" name="txtfname" placeholder="First Name">
			</div>
			
			<div class="form-group">
				<label for="txtlname">Last Name</label>
				<input type="text" class="form-control" name="txtlname" placeholder="Last Name">
			</div>			
			
			<div class="form-group">
				<label for="txtaddress">Home Address</label>
				<input type="text" class="form-control" name="txtaddress" placeholder="Address">
			</div>

			<div class="form-group">
				<label for="txtcontact">Contact Number</label>
				<input type="text" class="form-control" name="txtcontact" placeholder="Contact Number">
			</div>
			
			<div class="form-group">
				<label for="txtemail">E-mail Address</label>
				<input type="email" class="form-control" name="txtemail" placeholder="E-mail">
			</div>

			<div class="form-group">
				<label for="cbousertype">User Type</label>
				<select type="" class="form-control" name="cbousertype">				
				<?php 
                foreach($type as $t)
                { ?>
				<option value="<?php echo $t["typeID"];?>"><?php echo $t["typeName"];?> </option> 
				<?php } ?>	
				</select>
			</div>

			<div class="form-group">
				<label for="fileToUpload">Profile Picture</label>
    			<input type="file" name="fileToUpload" id="fileToUpload">			
			</div>


		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success" name="btnadd">Add New</button>
		  </div>
<?php		  
 if(isset($_POST["btnadd"]))
 {		 				
	if(!empty($_FILES['fileToUpload']['tmp_name']))
		{
		$target_dir = "../../client/shared-resources/img/";										
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) 
			{
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			} 
			else
				{
		       		echo "File is not an image.";
		        	$uploadOk = 0;
		    	}	    							
				include_once '../controller/client/user_edit_record.php';
				$name = basename($_FILES["fileToUpload"]["name"]);
				$array = array(
				"userID" => "null",
				"userName" => $_POST["txtusername"],
				"userPassword" => $_POST["txtpassword"],
				"userFirstName" => $_POST["txtfname"],
				"userLastName" => $_POST["txtlname"],
				"userContactNum" => $_POST["txtcontact"],	
				"userAddress" => $_POST["txtaddress"],
				"userEmail" => $_POST["txtemail"],	
				"userStatus" => 1,
				"userTypeID" => $_POST["cbousertype"],
				"userImage" => $name
				);				
					$obj = new user_edit_record;
					$obj->create($array);			
		echo "<script>					
				{ 				 			    						
					window.location.href='user_record.php?control=view_record&func=listall';									
				}
			</script>";	

			}
 }
?>	
		</div>  
	  </form>
    </div>
  </div>
</div>
	