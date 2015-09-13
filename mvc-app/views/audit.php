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
        <div class="panel-heading clearfix">          
            <h3 align="center">AUDIT TRAIL</h3>
        </div>
        <div class="panel-body">

            <!-- Data Table Goes Here-->
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr> 
                        <th style="text-align:center;">Audit ID</th>
                        <th style="text-align:center;">Username</th>
                        <th style="text-align:center;">Audit Date Time</th>           
                        <th style="text-align:center;">Remarks</th>
                       
                        </tr>
                </thead>               
                <tbody>
                  <?php
                   
                        $result = mysqli_query($con, "SELECT * FROM tblaudit order by auditDateTime desc");
                        while($row = mysqli_fetch_array($result))
                        { 
                        $id=$row["userID"];
                        $result5 = mysqli_query($con, "SELECT * FROM tblcompanyuser where userID = $id ");
                        $row1  = mysqli_fetch_array($result5);
                        echo '<tr>';
                        echo '<td style="text-align:center;"> '.$row["auditID"].' </td>';
                        echo '<td style="text-align:center;"> '.$row1["userName"].' </td>';
                        echo '<td style="text-align:center;"> '.$row["auditDateTime"].' </td>';
                        echo '<td style="text-align:center;"> '.$row["auditRemarks"].' </td>';
                        echo '</tr>';
                        }
                  ?>
                </tbody>
            </table>
            <!-- End Data Table-->
        </div>
    </div>
</div>
