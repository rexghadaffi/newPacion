
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
						<a class="hover-wrap fancybox" style=""  title="Profile Picture" href="shared-resources/img/default.gif">

						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<img src="shared-resources/img/default.gif" alt="">

						</div>
						<a href="">Upload an Image</a>

						</li>
<div class="col-md-5"></div>
						</ul>

			<div class="col-md-7">
				<label>Firstname</label>
				<input type="text" class="form-control" required>
			</div>
			<div class="col-md-7">
				<label>Lastname</label>
				<input type="text" class="form-control" required>
			</div>
			<div class="col-md-7">
				<label>Email Adress</label>
				<input type="text" class="form-control" required>
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Contact Number</label>
				<input type="text" class="form-control" required>
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Username</label>
				<input type="text" class="form-control" required>
			</div>

			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Password</label>
				<input type="text" class="form-control" readonly>
					<a href="">Change Password</a>
			</div>

			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label for="txtGender">Gender</label>				
				<select class="form-control" name="txtGender" required>
				<option selected="selected" value="" disabled>Please select Gender</option>
				<option>Male</option>
				<option>Female</option>

				</select>
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Course</label>
				<input type="text" class="form-control" required>
					
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<label>Year of Graduate</label>
				<input type="text" class="form-control" required>
					
			</div>
					<div class="col-md-12">
				
					<label for="txtaddress" required>Address</label>	<br>
					<textarea name="txtaddress" class="form-control" rows="8"></textarea>
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
	