<?php
include "shared-layouts/html.php";
include "shared-layouts/header.php";
include "core/database.php";
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

	<!-- divider -->
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
	
	<!-- end divider -->
	
<!-- start content -->
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6">
						<div class="box">
							<div class="box-gray aligncenter"  style="height:280px;">
								<h4>News</h4>
								<div class="icon">
								<i class="fa fa-desktop fa-3x"></i>
								</div>
								<?php
								$result = mysqli_query($con,"SELECT * FROM tblnews order by datePosted desc limit 3");								
								while ($row  = mysqli_fetch_array($result))
								{
								$time = strtotime($row["datePosted"]);
       				  			$newDate = date("m-d-Y", $time);
								?>
								<p class="col-md-6" style="text-align:left;">
								<?php  echo  $row["newsTitle"]; ?>
								</p>
								<p class="col-md-6" style="text-align:right;">
								<?php  echo  $newDate; } ?>
								</p>
							</div>
							<div class="box-bottom">
								<a href="#">View News</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="box">
							<div class="box-gray aligncenter"  style="height:280px;">
								<h4>Alumni Events</h4>
								<div class="icon">
								<i class="fa fa-edit fa-3x"></i>
								</div>
								<?php
								$result = mysqli_query($con,"SELECT * FROM tblactivity order by datePosted desc limit 3");								
								while ($row  = mysqli_fetch_array($result))
								{
								$time = strtotime($row["datePosted"]);
       				  			$newDate = date("m-d-Y", $time);
								?>
								<p class="col-md-6" style="text-align:left;">
								<?php  echo  $row["activityTitle"]; ?>
								</p>
								<p class="col-md-6" style="text-align:right;">
								<?php  echo  $newDate; } ?>
								</p>
							</div>							
							<div class="box-bottom">
								<a href="#">View Events</a>
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
							<div class="box-gray aligncenter"  style="height:280px;">
								<h4>Job Offers</h4>
								<div class="icon">
								<i class="fa fa-suitcase fa-3x"></i>
								</div>
								<?php
								$result = mysqli_query($con,"SELECT * FROM tbljob order by datePosted desc limit 3");								
								while ($row  = mysqli_fetch_array($result))
								{
								$time = strtotime($row["datePosted"]);
       				  			$newDate = date("m-d-Y", $time);
								?>
								<p class="col-md-6" style="text-align:left;">
								<?php  echo  $row["jobTitle"]; ?>
								</p>
								<p class="col-md-6" style="text-align:right;">
								<?php  echo  $newDate; } ?>
								</p>
							</div>
							<div class="box-bottom">
								<a href="#">View Jobs</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="box">
							<div class="box-gray aligncenter"  style="height:280px;">
								<h4>Alumni Events</h4>
								<div class="icon">
								<i class="fa fa-users fa-3x"></i>
								</div>
								<?php
								$result = mysqli_query($con,"SELECT * FROM tbltopic order by dateCreated desc limit 3");								
								while ($row  = mysqli_fetch_array($result))
								{
								$time = strtotime($row["dateCreated"]);
       				  			$newDate = date("m-d-Y", $time);
								?>
								<p class="col-md-6" style="text-align:left;">
								<?php  echo  $row["topicTitle"]; ?>
								</p>
								<p class="col-md-6" style="text-align:right;">
								<?php  echo  $newDate; } ?>
								</p>
							</div>
							<div class="box-bottom">
								<a href="#">View Forum</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- end content -->	
	</section>
	
<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Featured</span><span> Sites</span></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	

<section id="content">
	<div class="container">
		<div class="row col-md-12">
<div class="col-lg-4">
<div class="media">
  <div class="media-left">
    <a href="http://www.alumni.sti.edu/">
      <img class="media-object" src="shared-resources/img/stiaa.jpg" alt="STI Alumni Association">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">STI Alumni Association</h4>
    STI's commitment to establishing a lifelong relationship with its graduates has brought forth the inception of the STI Alumni Association, Inc. (STIAA).
     <br/> <br/>STIAA is a non-stock, non-profit organization duly organized and existing under and by virtue of the laws of the Republic of the Philippines. It was registered at the Securities and Exchange Commission on August 11, 1999 after top management approved its formal creation.....
    <a href="http://www.alumni.sti.edu/">
      Visit Site
    </a>	
  </div>
</div>
</div>

<div class="col-lg-4">
<div class="media">
  <div class="media-left media-top">
    <a href="http://www.i-cares.com/">
      <img class="media-object" src="shared-resources/img/icares.jpg" alt="Interactive Career Assistance And Recruitment System">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">I-Cares</h4>
    Establishing one’s career in today’s competitive environment has become an endless pursuit to most job seekers. Employers too are increasingly having a hard time finding the right person for the job. Too often, there remains a huge gap between the skills required by the industry and what a graduate has learned from school, hence job mismatch arises.
	<br/> <br/>STI steps up to bridge this gap by introducing the world’s very first E2E (Enrollment to Employment) System.......
	<a href="http://www.i-cares.com/">
		Visit Site
    </a>

  </div>
</div>
</div>

<div class="col-lg-4">
<div class="media">
  <div class="media-left media-top">
    <a href="https://www.facebook.com/groups/1504138379830932/?fref=ts">
      <img class="media-object" src="shared-resources/img/fb.png" alt="Like us on Facebook">
    </a>
  </div>
  <div class="media-body">
	<br/>
    <h4 class="media-heading">STI Alumni Facebook Page</h4>
    Hi Graduates! Join our facebook group...
	<a href="https://www.facebook.com/groups/1504138379830932/?fref=ts">
	Join us
    </a>
  </div>
</div>
</div>

</div>
</div>
</section>







<?php include "shared-layouts/footer.php"; ?>