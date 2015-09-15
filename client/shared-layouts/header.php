
<body>
<div id="wrapper">

	 <?php		  
 include "controller/Login_Controller.php";
    include "controller/Registration_Controller.php";

 
 ?>	
	<header style="background-color: black;">
        <div class="navbar navbar-default navbar-static-top"  style="background-color: #FFFF00;">
            <div class="container">
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span>STI</span> Alumni</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                        <li class="dropdown">
                            <a href="forum.php?page=page&action=display">Forum<b class=" icon-angle-down"></b></a>
                     <!--   <a href="forum.php?page=page&action=display" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Forum<b class=" icon-angle-down"></b></a>	-->										
                            <ul class="dropdown-menu">
                                <li><a href="">Chat</a></li>
							</ul>
                        </li>
                        <li><a href="allgallery.php">Gallery</a></li>
                   <li> <a href="users.php">Search Alumni</a></li>
                        <li><a href="contact.php">Contact</a></li>

						<?php
						if (logged_in() === false)
							{
								echo '  <li><a href="#loginModal" data-toggle="modal" data-backdrop="static" data-keyboard="false">Signin</a></li>
										<li><a href="registration.php" >SignUp</a></li>
								
								';
							}
						else
							{

								echo '<li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-cog"></i><b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                             <li>   <a href="#changepwModal" data-toggle="modal" data-dismiss="modal" data-backdrop="static" data-keyboard="false">Change Password</a></li>
                                <li><a href="#profileModal" data-toggle="modal" data-backdrop="static" data-keyboard="false">My Profile</a></li>
								 <li><a href="controller/logout.php">Logout</a></li>
                          
						                            </ul>
                        </li>';
							}
						?>
						
                      
                    </ul>
                </div>
            </div>
        </div>
	</header>