<!-- Employee Form Sample -->
<div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header custom-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Admin Record</h4>
      </div>
	   <form method="post">
		  <div class="modal-body">
	    	<div class="form-group">
	    		<div class="form-group">
				<label for="txtfirstname">First Name</label>
				<input type="text" class="form-control" name="txtfirstname" placeholder="First Name">
			</div>
			<div class="form-group">
				<label for="txtlastname">Last Name</label>
				<input type="text" class="form-control" name="txtlastname" placeholder="Last Name">
			</div>

				<label for="txtusername">Username</label>
				<input type="text" class="form-control" name="txtusername" placeholder="Username">
			</div>
			
			<div class="form-group">
				<label for="txtpassword">Password</label>
				<input type="password" class="form-control" name="txtpassword" placeholder="Password">
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
		"firstName" => $_POST["txtfirstname"],
		"lastName" => $_POST["txtlastname"],
		"userName" => $_POST["txtusername"],
		"userPassword" => $_POST["txtpassword"],
		"userStatus" => 1,
		"userTypeID" =>  3,
		"userImage" =>  "Administrator.png"
		);
		
		$obj = new admin_edit_record;
		$obj->create($array);
			include "../core/database.php";


		 date_default_timezone_set('Asia/Manila');  
								$currentdate = date("Y/m/d"); 
								$currentTime = date("g:i:s a");
								$timestamp= date('Y-m-d G:i:s');
			$id= $_SESSION['id'];				
			$remark	= 'add admin <span style="color:green;font-weight:bold;">"'.$_POST["txtusername"].'"</span>';
        $result= mysqli_query($con,"INSERT INTO tblaudit (userID, auditDateTime, auditRemarks) VALUES ('$id','$timestamp', '$remark')");	

		echo "<script>					
												  { 
										 			    						
	 													window.location.href='admin_record.php?control=view_record&func=listall&notif=true';
											
		
												  }
	 												   </script>";
		
 }
?>		  
	  </form>
    </div>
  </div>
</div>