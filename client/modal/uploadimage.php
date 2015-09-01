

<div class="modal fade" id="uploadImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-custom" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white;font-size:24px" align="center">Profile Picture</h4>
      </div>
	  <form  method="POST" enctype="multipart/form-data">
		  <div class="modal-body">
	    
			
	
    Select image to upload:
    <input type="file" name="image" />
       


	
		  <div class="modal-footer">
			<button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success btn-lg" name="btnUpload">Upload</button>

			 
		  </div>

		</div>  
	  </form>
    </div>
  </div>
</div>

<?php



if(isset($_FILES['image']))
{
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false)
      	{
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      	}
      
      if($file_size > 2097152)
      	{
         $errors[]='File size must be excately 2 MB';
		}
      
      if(empty($errors)==true)
      	{
         move_uploaded_file($file_tmp,"shared-resources/img/Profile/".$file_name);
        $resultimage = mysqli_query($con, "UPDATE tblclientuser SET userImage = '".$file_name."' where userID = '".$_SESSION['id']."'");
      	  if($resultimage)
       		 {

		echo "<script>imageSuccess();</script>";

			}
			else 
				{
			echo "<script>wrongimage();</script>";
				}
     	 }
      
   
}





?>