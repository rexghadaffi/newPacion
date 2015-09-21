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
           
                   <h3>Alumni Clients</h3>
                
            
        </div>
        
        <div class="panel-body">
        <form method="post" enctype="multipart/form-data">
            <!-- Data Table Goes Here-->
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>       
                        <th>Student No.</th>             
                        <th>First Name</th>
                        <th>Last Name</th> 
                        <th>Course</th> 
                        <th>Year Graduated</th>                          
                        <th style="text-align:center">Action</th>
                    </tr>
                </thead>               
                
<?php 
              $result5 = mysqli_query($con, "SELECT * FROM tblclientuser where userStatus=0 ");
              while($row5 = mysqli_fetch_array($result5))
    {
        echo '<tr>';
        echo '<td> '.$row5["userName"].' </td>';        
        echo '<td> '.$row5["userFirstName"].' </td>';
        echo '<td> '.$row5["userLastName"].' </td>';
        echo '<td> '.$row5["userCourse"].' </td>';
        echo '<td> '.$row5["userYearGrad"].' </td>';
        echo '<td align="center"><button type="submit" class="btn btn-success" name="A'.$row5["userID"].'">Approve</button>&nbsp;&nbsp;<button type="submit" class="btn btn-danger" name="D'.$row5["userID"].'">Deny</button></td>';  
        echo '</tr>';
       
        if(isset($_POST['A'.$row5['userID']]))
                {    
                  $result1 = mysqli_query($con,"UPDATE tblclientuser SET userStatus='1'where userID=".$row5['userID']."");
                date_default_timezone_set('Asia/Manila');  
                                $currentdate = date("Y/m/d"); 
                                $currentTime = date("g:i:s a");
                                $timestamp= date('Y-m-d G:i:s');
            $id= $_SESSION['id'];               
            $remark = 'approve alumni <span style="color:green;font-weight:bold;">"'.$row5["userName"].'"</span>';
            $result= mysqli_query($con,"INSERT INTO tblaudit (userID, auditDateTime, auditRemarks) VALUES ('$id','$timestamp', '$remark')");
        $email = $row5['userEmail'];

    $from = 'sticollegecubaoalumni@gmail.com';
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    //phpmailer functions
    $mail->IsMail();
    //$mail->SMTPAuth = true;
    $mail->Host = gethostbyname('smtp.gmail.com');
    //$mail->Host = gethostbyname('mx1.2freehosting.com');
    //$mail->Port = 25;
    $mail->SMTPDebug = 3;
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    
    $mail->IsHTML(true);
    $mail->SingleTo = true;
    $mail->Subject = "STI College Cubao Alumni";
    $mail->addAddress($email);
    $mail->From = $from;
    $mail->FromName = "STI College Cubao Alumni";
    $mail->AddReplyTo($from);
    
    $mail->Username = "sticollegecubaoalumni@gmail.com";
    $mail->Password = "stiadmin1234";
    
    $mail->Body .= '<html><body>';
    $mail->Body .= '<img src="http://stialumni.3eeweb.com/client/shared-resources/img/stiaa.jpg">';
    $mail->Body .= '<p>Welcome,</p>
<p>We are glad to welcome you as an alumni of Sti College Cubao</p>
<p>You can now login in STI College Cubao Alumni.</p>
<p>Click this link to redirect to Sti College Cubao Alumni Website.</p>
<p>http://stialumni.3eeweb.com</p>';
$mail->Body .= '</body></html>';
$mail->Send();




                echo "<script>                  
                {                                                       
                    window.location.href='validatereg.php';                                    
                }
                </script>";

                    

                } 

        if(isset($_POST['D'.$row5['userID']]))
                {    
                  $result1 = mysqli_query($con,"UPDATE tblclientuser SET userStatus='3'where userID=".$row5['userID']."");
                         date_default_timezone_set('Asia/Manila');  
                                $currentdate = date("Y/m/d"); 
                                $currentTime = date("g:i:s a");
                                $timestamp= date('Y-m-d G:i:s');
 
                $id= $_SESSION['id'];               
            $remark = 'deny alumni <span style="color:red;font-weight:bold;">"'.$row5["userName"].'"</span>';
            $result= mysqli_query($con,"INSERT INTO tblaudit (userID, auditDateTime, auditRemarks) VALUES ('$id','$timestamp', '$remark')");
                $declinedemail =  $row5['userEmail'];

 $from = 'sticollegecubaoalumni@gmail.com';
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    //phpmailer functions
    $mail->IsMail();
    //$mail->SMTPAuth = true;
    $mail->Host = gethostbyname('smtp.gmail.com');
    //$mail->Host = gethostbyname('mx1.2freehosting.com');
    //$mail->Port = 25;
    $mail->SMTPDebug = 3;
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->IsHTML(true);
    $mail->SingleTo = true;
    $mail->Subject = "STI College Cubao Alumni";
    $mail->addAddress( $declinedemail);
    $mail->From = $from;
    $mail->FromName = "STI College Cubao Alumni";
    $mail->AddReplyTo($from);
    $mail->Username = "sticollegecubaoalumni@gmail.com";
    $mail->Password = "stiadmin1234";
    
    $mail->Body .= '<html><body>';
    $mail->Body .= '<img src="http://stialumni.3eeweb.com/client/shared-resources/img/stiaa.jpg">';
    $mail->Body .= '<p>Welcome,</p>
<p>We are very sorry, we declined your request in registering in STI College Cubao Alumni. </p>
<p>Pls contact us at Tel. nos.: 421-1029 / 911-1824 for manual verification </p>
<p>Thank you. </p>
';
    $mail->Body .= '</body></html>';
    $mail->Send();
   




                echo "<script>                  
                {                                                       
                    window.location.href='validatereg.php';                                    
                }
                </script>";


                } 
    }
       
?> 
            
            </table>
            <!-- End Data Table-->
            </form>
        </div>
    </div>
 </div>

