<?php
include "../core/database.php";
?>
<nav class="navbar navbar-default navbar-fixed-top" >
    <div class="container-fluid" style="background-color:#CCCCF5">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Home.php"><span class="fa fa-home"></span>&nbsp;Admin Panel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="audit.php">Reports</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php
                          
                            $result = mysqli_query($con,"Select * from tblclientuser where userStatus=0");
                            $count=mysqli_num_rows($result);
                            if($count>=1)
                            {
                             echo '<li>';
                             echo '<a href="validatereg.php" style="color:red; font-weight:bold" >('.$count.')<i class="fa fa-bell fa-fw" ></i>Notification</a>';
                             echo '</li>';   
                            }
                            else
                            {
                             echo '<li>';
                             echo '<a href="#" style="color:grey; font-weight:bold" >('.$count.')<i class="fa fa-bell fa-fw" ></i>Notification</a>';
                             echo '</li>';   
                            }

                           
                ?>

                
                <li><a href="#">Welcome, <strong><?php 
               if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                        }
                echo $_SESSION['user']; 
              
                ?></strong></a></li>
                <li>
                   		    <a href="../shared-layouts/logout.php"><i class="fa fa-cog fa-fw"></i>&nbsp; Logout</a> 
				</li>
           
        </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
