<?php
include "../core/init.php";
include "../core/database.php";
redirect();
?>
<?php
include '../shared-layouts/_layout.php';
?>
<div class="col-md-10">

    <div class="panel panel-default">
        <div class="panel-body">
<form method="post">
<!-- BS FORM -->
			<?php     
              
        $result = mysqli_query($con, "SELECT * FROM tblcontent where contentID = 1");
        $row2 = mysqli_fetch_array($result)
        ?>
 		     		       

			<div align="center">
				<h4><strong>History</strong></h4>
				<textarea name="hiscontent" cols="50" style="height:300px; padding:100px"><?php echo $row2["content"]; ?></textarea>
				</br>
				<button type="submit" name="savehistory" class="btn btn-sm btn-success"><span class="fa fa-floppy-o fa-fw"></span>&nbsp;Save
                </button> 
			</div>
    
<?php
 if(isset($_POST["savehistory"]))
 {		
 	
 	
 	$result = mysqli_query($con, "UPDATE tblcontent set content= '".$_POST['hiscontent']."' where contentID = 1");
				echo "<script>					
												  { 
										 			    						
	 													window.location.href='edit_content.php';
											
		
												  }
	 												   </script>";
		
 }
?>
</br>
              <?php     
              
        $result1 = mysqli_query($con, "SELECT * FROM tblcontent where contentID = 3");
        $row3 = mysqli_fetch_array($result1)
        ?>
 		     		       

			<div align="center">
				<h4><strong>Vision</strong></h4>
				<textarea name="vision" cols="50" style="height:300px; padding:100px"><?php echo $row3["content"]; ?></textarea>
				</br>
				<button type="submit" name="savevision" class="btn btn-sm btn-success"><span class="fa fa-floppy-o fa-fw"></span>&nbsp;Save
                </button> 
			</div>
    
<?php
 if(isset($_POST["savevision"]))
 {		
 	
 	
 	$result = mysqli_query($con, "UPDATE tblcontent set content= '".$_POST['vision']."' where contentID = 3");
				echo "<script>					
												  { 
										 			    						
	 													window.location.href='edit_content.php';
											
		
												  }
	 												   </script>";
		
 }
?>

</br>
              <?php     
              
        $result2 = mysqli_query($con, "SELECT * FROM tblcontent where contentID = 4");
        $row4 = mysqli_fetch_array($result2)
        ?>
 		     		       

			<div align="center">
				<h4><strong>Mission</strong></h4>
				<textarea name="mission" cols="50" style="height:300px; padding:100px"><?php echo $row4["content"]; ?></textarea>
				</br>
				<button type="submit" name="savemission" class="btn btn-sm btn-success"><span class="fa fa-floppy-o fa-fw"></span>&nbsp;Save
                </button> 
			</div>
    
<?php
 if(isset($_POST["savemission"]))
 {		
 	
 	
 	$result = mysqli_query($con, "UPDATE tblcontent set content= '".$_POST['mission']."' where contentID = 4");
				echo "<script>					
												  { 
										 			    						
	 													window.location.href='edit_content.php';
											
		
												  }
	 												   </script>";
		
 }
?>
              </br>
              <?php     
              
        $result3 = mysqli_query($con, "SELECT * FROM tblcontent where contentID = 5");
        $row5 = mysqli_fetch_array($result3)
        ?>
 		     		       

			<div align="center">
				<h4><strong>Contact</strong></h4>
				<textarea name="contact" cols="50" style="height:300px; padding:100px"><?php echo $row5["content"]; ?></textarea>
				</br>
				<button type="submit" name="savecontact" class="btn btn-sm btn-success"><span class="fa fa-floppy-o fa-fw"></span>&nbsp;Save
                </button> 
			</div>
    
<?php
 if(isset($_POST["savecontact"]))
 {		
 	
 	
 	$result = mysqli_query($con, "UPDATE tblcontent set content= '".$_POST['contact']."' where contentID = 5");
				echo "<script>					
												  { 
										 			    						
	 													window.location.href='edit_content.php';
											
		
												  }
	 												   </script>";
		
 }
?>
		
            
        </div>
         <div class="panel-footer clearfix">
		   <div class="pull-right">
				
            </div>         
		 </div>
    </div>
    </form>	
</div>
<script type="text/javascript">
	tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons", });
</script>
</body>
</html>