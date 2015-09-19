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
            <h3 align="center">ALUMNI PROFILE</h3>
                   
            
        </div>
        <div class="panel-body">
           <div class="row">
          <div class="col-lg-12">
        <form method="post" enctype="multipart/form-data">
          <?php     
                  $id = $_SESSION['id'];
        $result = mysqli_query($con, "SELECT * FROM tblcompanyuser where userID = $id");
        $row2 = mysqli_fetch_array($result)
        ?>
                                               
             <div class="col-md-8">
                <label>Firstname</label>
                <input type="text" name="txtSnum" class="form-control" readonly value="<?php echo $row2['userName']?>">
            </div>   
            <div class="col-md-8">
                <label>Lastname</label>
                <input type="text" name="txtFname" class="form-control" readonly value="<?php echo $row2['userFirstName']?>">
            </div>
            <div class="col-md-8">
                <label>username</label>
                <input type="text" name="txtLname" class="form-control" readonly value="<?php echo $row2['userLastName']?>">
            </div>
            <div class="col-md-8">
                <label>Email Adress</label>
                <input type="text" name="txtEmail" class="form-control" readonly value="<?php echo $row2['userEmail']?>">
            </div>
            
            <div class="col-md-8">
                <label>Contact Number</label>
                <input type="text" name="txtContact" class="form-control" readonly value="<?php echo $row2['userContactNum']?>">
            </div>
            
            <div class="col-md-5"></div>
            <div class="col-md-8">
                <label for="txtGender">Gender</label>               
            
                    <input type="text" name="txtContact" class="form-control" readonly value="<?php echo $row2['userGender']?>">
                </select>
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-8">
                <label>Course</label>
                <input type="text" class="form-control" name="txtCourse" readonly value="<?php echo $row2['userCourse']?>">
                    
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-8">
                <label>Year of Graduate</label>
                <input type="text" class="form-control" name="txtYear" readonly  value="<?php echo $row2['userYearGrad']?>">
                    
            </div>
                    <div class="col-md-12">
                
                    <label for="txtaddress" >Address</label>    <br>
                    <textarea name="txtaddress" class="form-control" rows="8" readonly> <?php echo $row2['userAddress']?> </textarea>
            </div>

    
            </div>
            </div>
            </div>
          <div class="modal-footer">
            <a class="btn btn-success" href="user_record.php?control=view_record&func=listall">Back</a>
            

         
          
          </div>
          </form>
        </div>
         
    </div>
</div>
</div>

