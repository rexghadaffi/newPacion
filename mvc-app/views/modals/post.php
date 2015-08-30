<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header custom-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" align="center">Add New Post</h4>
      </div>
	   <form method="POST" >
		  <div class="modal-body">
		  <div class="row">
		  <div class="col-lg-12">

			<div class="col-md-12">
				<label>Post Title</label>
				<input type="text" class="form-control" name="title" required>
			</div>
			<div class="col-md-12">
				<label>Content</label>
				<textarea class="form-control" rows="3" name="desc"></textarea>
			</div>
		 
</div>
  </div>		
  </div>
   <div class="modal-footer">
			<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success btn-sm" name="btnpost">Post</button>
		  </div>
  
	  </form>
    </div>
  </div>
</div>
	