<?php
include "../core/init.php";
include "../core/database.php";
redirect();
?>
<?php
include '../shared-layouts/_Layout.php';
?>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">           
                   <h3>Upload News Image</h3>
                   
            
        </div>
        <div class="panel-body">
        <form method="post" enctype="multipart/form-data">
            <font color="red">*note the file name of the image must be unique</font>
            <div class="form-group">
                <label for="fileToUpload">Image</label>
                <input type="file" name="fileToUpload" id="fileToUpload">           
            </div>


          <div class="panel-footer">
            <a class="btn btn-default" href="edit_news.php?control=news_edit_record&func=edit&id=<?php echo $_GET["id"];?>">Cancel</a>
            <button type="submit" class="btn btn-success" name="btnadd">Add New</button>

            <?php         
 if(isset($_POST["btnadd"]))
 {                      
    if(!empty($_FILES['fileToUpload']['tmp_name']))
        {
        $target_dir = "../../client/shared-resources/img/newsimage/";                                       
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) 
            {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            } 
            else
                {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
                $id = $_GET['id'];
                $name = basename($_FILES["fileToUpload"]["name"]);
                $result= mysqli_query($con,"INSERT INTO tblnewsimage (newsID, newsImage, status) VALUES ($id,'$name',1)");          
                                            

            }
     }
?>  
          
          </div>
          </form>
        </div>
         
    </div>
</div>
</div>

