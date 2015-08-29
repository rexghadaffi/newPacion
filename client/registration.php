<?php
include "shared-layouts/html.php";
include "shared-layouts/header.php";
?>
	<!-- end header -->
	
	<section id="inner-headline">
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><a href="registration.php">Registration</a></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="well col-lg-12">
<h2 align="center">Registration</h2>
		<form method="POST">
				<div class="col-md-6">
				<br>
				<label for="txtFname">Firstname</label>				
				<input type="text"  class="form-control" name="txtFname" placeholder="Enter Firstname" required>
				</div>
				<div class="col-md-6">
				<br>
				<label for="txtLname">Lastname</label>
				<input type="text" class="form-control" name="txtLname" placeholder="Enter Lastname" required>
				</div>
				<div class="col-md-6">
				<br>
				<label for="txtUsername">Username</label>				
				<input type="text"  class="form-control" name="txtUsername" placeholder="Enter Username" required>
				</div>
				<div class="col-md-6">
				<br>
				<label for="txtEmail">Email</label>				
				<input type="text"  class="form-control" name="txtEmail" placeholder="Enter Email address" required>
				</div>
				<div class="col-md-6">
				<br>
				<label for="txtPassword">Password</label>				
				<input type="password"  class="form-control" name="txtPassword" placeholder="Enter Password" required>
				</div>
				<div class="col-md-6">
				<br>
				<label for="txtRetypePassword">Re-Type Password</label>				
				<input type="password"  class="form-control" name="txtRetypePassword" placeholder="Re-Type Password">
				</div>
				<div class="col-md-6">
				<br>
				<label for="txtContact">Contact Number</label>				
				<input type="text"  class="form-control" name="txtContact" placeholder="Enter Contact Number" required>
				
				</div>
				<div class="col-md-6">
				<br>
				<label for="txtGender">Gender</label>				
				<select class="form-control" name="txtGender" required>
				<option selected="selected" value="" disabled>Please select Gender</option>
				<option>Male</option>
				<option>Female</option>

				</select>
				</div>
				
					<div class="col-md-6">
				<br>
				<label for="txtCourse">Course</label>				

				<input type="text"  class="form-control" name="txtCourse" placeholder="Enter Course" required>
				
				
				
			
				</div>
				<div class="col-md-6">
				<br>
				<label for="txtYeargrad">Year Graduated</label>				
				
								<input type="text"  class="form-control" name="txtYeargrad" placeholder="Enter Year of Graduation" required>
			
				</div>
				<div class="col-lg-12">
					<br>
					<label for="txtaddress" required>Address</label>	<br>
					<textarea name="txtaddress" class="form-control" rows="8"></textarea>
				</div>
			
				<div class="col-md-4">
				</div>
				
				<div class="col-lg-12" align="center">
				<br>
	
				
				<button type="submit" class="btn btn-success btn-lg" name="btnregister">Sign Up</button>
				
				</div>
	
    </form>
		




		
		
		</div>
		</div>
		</div>
		</section>
	<?php
include "shared-layouts/footer.php";
	?>