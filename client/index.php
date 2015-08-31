<?php
include "shared-layouts/html.php";
include "shared-layouts/header.php";
?>
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="shared-resources/img/slides/1.jpg" alt="" />
<!--				
                <div class="flex-caption">
                    <h3>Modern Design</h3> 
					<p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
				</div>
-->				
              </li>
              <li>
                <img src="shared-resources/img/slides/2.jpg" alt="" />
<!--
                <div class="flex-caption">
				<h3>Fully Responsive</h3> 
					<p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
-->
				</li>
              <li>
                <img src="shared-resources/img/slides/3.jpg" alt="" />
<!--
                <div class="flex-caption">
                    <h3>Clean & Fast</h3> 
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
-->
				</li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>News</span> and <span> Features</span></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container" >
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6">
						<div class="box" >
							<div class="box-gray aligncenter" style="display:block; height:400px; overflow:scroll;">
								<h4>News</h4>
								<?php
								$con = mysqli_connect('localhost','root','','db_alumni') or die ($connect_error);
								$result = mysqli_query($con,"SELECT * FROM tblnews order by datePosted desc limit 1 ");
								$row  = mysqli_fetch_array($result);
								$time = strtotime($row["datePosted"]);
       				  			$newDate = date("m-d-Y", $time);
								?>
							<div class="panel panel-warning" >
  							<div class="panel-heading"><h4><?php  echo  $row["newsTitle"]; ?></h4> <p><?php  echo  $newDate; ?></p></div>
  							<div class="panel-body"><h5><?php  echo  $row["newsDesc"]; ?></h5> </br> 
  							</div>
							</div>				
		
							
									
							</div>
							<div class="box-bottom">
								<a href="news_record.php?control=view_record&func=listall">View more News</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="box">
							<div class="box-gray aligncenter" style="display:block; height:400px; overflow:scroll;">
								<h4>Events</h4>
								
								<?php
								$result = mysqli_query($con,"SELECT * FROM tblactivity order by activityID desc limit 1 ");
								$row1  = mysqli_fetch_array($result);
								?>
							<div class="panel panel-danger">
  							<div class="panel-heading"><h4><?php  echo  $row1["activityTitle"]; ?></h4></div>
  							<div class="panel-body"><h5><?php  echo  $row1["activityDescription"]; ?></h5> </br> 
  							</div>
							</div>
									
							</div>
							<div class="box-bottom">
								<a href="activities_record.php?control=view_record&func=listall">View more Events</a>
							</div>
						</div>
					</div>
			
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">

			</div>
		</div>
		<!-- end divider -->
			
					<div class="col-lg-6">
						<div class="box">
							<div class="box-gray aligncenter" style="display:block; height:400px; overflow:scroll;">
								<h4>Job offers</h4>
									<?php
								
								$result = mysqli_query($con,"SELECT * FROM tbljob order by datePosted desc limit 1 ");
								$row2  = mysqli_fetch_array($result);
								$time = strtotime($row["datePosted"]);
       				  			$newDate = date("m-d-Y", $time);
								?>
							<div class="panel panel-primary">
  							<div class="panel-heading"><h4><?php  echo  $row2["jobTitle"]; ?></h4> <p><?php  echo  $newDate; ?></p></div>
  							<div class="panel-body"><h5><?php  echo  $row2["jobDesc"]; ?></h5> </br> 
  							</div>
							</div>
									
							</div>
							<div class="box-bottom">
								<a href="job_record.php?control=view_record&func=listall">View jobs</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="box">
							<div class="box-gray aligncenter" style="display:block; height:400px; overflow:scroll;">
								<h4>Latest Post</h4>
								<div class="icon">
								<i class="fa fa-thumb-tack fa-3x"></i>
								</div>
								<p>
								 
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="#">View forums</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
	
	</div>
	</section>
		<?php
include "shared-layouts/footer.php";
	?>