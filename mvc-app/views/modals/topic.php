<div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header custom-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">Add New Topic</h4>
      </div>
	   <form method="POST" >
		  <div class="modal-body">
		  <div class="row">
		  <div class="col-lg-12">

			<div class="col-md-11">
				<label>Topic Title</label>
				<input type="text" class="form-control" name="title" required>
			</div>
			
			<div class="col-md-11">
				<label>Content</label>
				<textarea class="form-control" rows="3" name="content"></textarea>
			</div>
			
			<div class="form-group col-md-11">
				<label for="cboucategory">Forum Category</label>
				<select type="" class="form-control" name="cbocategory">
				<?php foreach($category as $cat)
				{
					echo '<option value="'.$cat["forumCatID"].'">'.$cat["forumCatTitle"].'</option>';
				}	
				?>
				</select>
			</div>					
	 
</div>
  </div>
   <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success" name="btntopic">Post</button>
		  </div>
		</div>  
	  </form>
    </div>
  </div>
</div>
	