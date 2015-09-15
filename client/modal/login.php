
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-custom" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white;font-size:24px" align="center">Sign-in</h4>
      </div>
	   <form method="POST" >
		  <div class="modal-body">
	    	<div class="form-group">
				<label for="txtusername">Username</label>				
				<input type="text"  class="form-control" name="username" placeholder="Enter Username">
						</div>
			
			<div class="form-group">
				<label for="txtpassword">Password</label>
				<input type="password" class="form-control" name="password" placeholder="Enter Password">

			</div>
			<div class="form-group">
				
				<a href="#forgotModal" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-dismiss="modal" class="pull-right">Forgot Password?</a>
				<br>
			</div>
			
		  <div class="modal-footer">
			<button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success btn-lg" name="btnlogin">Sign-in</button>
		  </div>

		</div>  
	  </form>
    </div>
  </div>
</div>
	