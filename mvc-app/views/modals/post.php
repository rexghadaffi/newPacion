<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-custom" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white;font-size:24px" align="center">Add New Post</h4>
      </div>
	   <form method="POST" >
		  <div class="modal-body">
		  <div class="row">
		  <div class="col-lg-12">

			<div class="col-md-11">
				<label>Post Title</label>
				<input type="text" class="form-control" name="title" required>
			</div>
			<div class="col-md-11">
				<label>Content</label>
				<textarea class="form-control" rows="3" name="desc"></textarea>
			</div>
		 
</div>
  </div>
   <div class="modal-footer">
			<button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success btn-lg" name="btnpost">Post</button>
		  </div>
		</div>  
	  </form>
    </div>
  </div>
</div>
	