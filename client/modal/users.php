
<div class="modal fade" id="usersModal<?php echo $rowuser["userID"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-custom" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white;font-size:24px" align="center">Users Profile</h4>
      </div>

<?php
	if (logged_in() ===true)
	{
		
	$userdetails = mysqli_query($con, "SELECT * FROM tblclientuser where userID = '".$rowuser["userID"]."'");
	$row2 = mysqli_fetch_array($userdetails);
	}
?>
	   <form method="POST" >
		  <div class="modal-body">
		  <div class="row">
		  <div class="col-lg-12">
						<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<li class="col-lg-5 design" data-id="id-0" data-type="web">
						<div class="item-thumbs">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" style=""  title="Profile Picture" href="shared-resources/img/default.png">

						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<img src="shared-resources/img/default.png" alt="">

						</div>
					

						</li>
						<div class="col-md-5"></div>
						</ul>

			<div class="col-md-7">
				<label>Firstname</label>
				<input type="text" name="txtFname" class="form-control" readonly value="<?php echo $row2['userFirstName']?>">
			</div>
			<div class="col-md-7">
				<label>Lastname</label>
				<input type="text" name="txtLname" class="form-control" readonly value="<?php echo $row2['userLastName']?>">
			</div>
			<div class="col-md-7">
				<label>Email Adress</label>
				<input type="text" name="txtEmail" class="form-control" readonly value="<?php echo $row2['userEmail']?>">
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Contact Number</label>
				<input type="text" name="txtContact" class="form-control" readonly value="<?php echo $row2['userContactNum']?>">
			</div>
			
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label for="txtGender">Gender</label>				
			
					<input type="text" name="txtContact" class="form-control" readonly value="<?php echo $row2['userGender']?>">
				</select>
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Course</label>
				<input type="text" class="form-control" name="txtCourse" readonly value="<?php echo $row2['userCourse']?>">
					
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Year of Graduate</label>
				<input type="text" class="form-control" name="txtYear" readonly  value="<?php echo $row2['userYearGrad']?>">
					
			</div>
					<div class="col-md-12">
				
					<label for="txtaddress" >Address</label>	<br>
					<textarea name="txtaddress" class="form-control" rows="8" readonly> <?php echo $row2['userAddress']?> </textarea>
			</div>


		 
</div>
  </div>
   <div class="modal-footer">
			<button type="button" data-dismiss="modal" name="cancel" class="btn btn-warning btn-lg" >Cancel</button>
			
		  </div>
		</div>  
	  </form>
    </div>
  </div>
</div>
