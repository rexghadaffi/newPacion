<?php
include "controller/Profile_Controller.php";

?>
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-custom" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white;font-size:24px" align="center">My Profile</h4>
      </div>
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
						<a href="">Upload an Image</a>

						</li>
						<div class="col-md-5"></div>
						</ul>

			<div class="col-md-7">
				<label>Firstname</label>
				<input type="text" name="txtFname" class="form-control" required value="<?php echo $row['userFirstName']?>">
			</div>
			<div class="col-md-7">
				<label>Lastname</label>
				<input type="text" name="txtLname" class="form-control" required value="<?php echo $row['userLastName']?>">
			</div>
			<div class="col-md-7">
				<label>Email Adress</label>
				<input type="text" name="txtEmail" class="form-control" required value="<?php echo $row['userEmail']?>">
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Contact Number</label>
				<input type="text" name="txtContact" class="form-control" required value="<?php echo $row['userContactNum']?>">
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Username</label>
				<input type="text" name="txtUsername" class="form-control" required value="<?php echo $row['userName']?>">
			</div>

			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Password</label>
				<input type="password" class="form-control" readonly value="<?php echo $row['userPassword']?>">
				<a href="#changepwModal" data-toggle="modal" data-dismiss="modal" data-backdrop="static" data-keyboard="false">Change Password</a>
					
			</div>

			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label for="txtGender">Gender</label>				
				<select class="form-control" name="txtGender" required>
				<?php
					if ($row['userGender'] == "Male")
					{
						echo '
						<option>'.$row['userGender'].'</option>
				
				<option>Female</option>

						';


					}
					else
					{

						echo '
						<option>'.$row['userGender'].'</option>		
						<option>Male</option>

						';

					}
				?>
				
				</select>
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Course</label>
				<input type="text" class="form-control" name="txtCourse" required value="<?php echo $row['userCourse']?>">
					
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Year of Graduate</label>
				<input type="text" class="form-control" name="txtYear" required  value="<?php echo $row['userYearGrad']?>">
					
			</div>
					<div class="col-md-12">
				
					<label for="txtaddress" required>Address</label>	<br>
					<textarea name="txtaddress" class="form-control" rows="8" required><?php echo $row['userAddress']?></textarea>
			</div>


		 
</div>
  </div>
   <div class="modal-footer">
			<button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success btn-lg" name="btnupdate">Update</button>
		  </div>
		</div>  
	  </form>
    </div>
  </div>
</div>
	