
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-custom" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white;font-size:24px" align="center">Signin</h4>
      </div>
	   <form method="POST" >
		  <div class="modal-body">
	    	<div class="form-group">
				<label for="txtusername">Username</label>				
				<input type="text"  class="form-control" name="username" placeholder="Username">
						</div>
			
			<div class="form-group">
				<label for="txtpassword">Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			
			
		  <div class="modal-footer">
			<button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success btn-lg" name="btnlogin">Signin</button>
		  </div>

		</div>  
	  </form>
    </div>
  </div>
</div>
	