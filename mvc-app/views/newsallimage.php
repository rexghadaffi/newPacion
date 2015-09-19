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
      <?php  
               $id = $_GET['id'];
        $result = mysqli_query($con, "SELECT * FROM tblnews where newsID = $id");
        $row = mysqli_fetch_array($result)
      ?>         
                   <h3>Images from <?php echo $row['newsTitle']; ?></h3>
                
            
        </div>
        <div class="panel-body">
        <form method="post" enctype="multipart/form-data">
            <section id="projects">
                <table id="example" class="display" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                            <th style="text-align:center"><h3><strong>News Image</strong></h3></th>
                            <th style="text-align:center"><h3><strong>Status</strong></h3></th>
                            <th></th>
                            </tr>
                          </thead>
           <?php
                        $id = $_GET['id'];                 
                        $result5 = mysqli_query($con, "SELECT * FROM tblnewsimage where newsID = $id ");
                        while($row5 = mysqli_fetch_array($result5))
                        {
                        echo "<tr>";
                        echo "<td align='center'><font color='black'> <img src='../../client/shared-resources/img/newsimage/".$row5['newsImage']."'  height='200' width='250' /></font></td>";
                           if ($row5["status"] == 1) {
                        echo '<td align="center"><label class="label label-success">Active</label></td>';  
                            }
                            else {
                        echo '<td align="center"><label class="label label-danger">InActive</label></td>';             
                             }
                        
                        echo '<td align="center"><button type="submit" class="btn btn-success" name="'.$row5["id"].'">Change Status</button></td>';
                        echo "</tr>";
          if(isset($_POST[$row5['id']]))
                {        
                if ($row5["status"] == 1) {             
           $result1 = mysqli_query($con,"UPDATE tblnewsimage SET status='0'where id=".$row5['id']."");
                }
                else{
                     $result2 = mysqli_query($con,"UPDATE tblnewsimage SET status='1' where id=".$row5['id']."");
                }
          echo "<script>                  
                {                                                       
                    window.location.href='newsallimage.php?id=".$_GET["id"]."';                                    
                }
            </script>"; 

            }
 

                    }
                    
                    ?>
        
                        
                    </table>
                    </section> 
          
         
        </form>
        </div>
        <div class="panel-footer">
            <a class="btn btn-primary" href="edit_news.php?control=news_edit_record&func=edit&id=<?php echo $_GET["id"];?>">Done</a>
            </div>
    </div>


</div>
</div>

