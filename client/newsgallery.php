<?php
include "shared-layouts/html.php";
include "shared-layouts/header.php";
include "core/database.php";
?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Portfolio</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li ><a href="allgallery.php">All</a></li>
					<li ><a href="activitygallery.php" title="">Events</a></li>
					<li class="active"><a href="newsgallery.php" title="">News</a></li>
					
				</ul>
				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
						<ul id="thumbs" class="portfolio">
<?php
						echo '<div class="col-lg-12" align="center">';
						echo '<h1 style="color:#5CADFF;">News</h1>';
						echo '</div>';
						$result2 = mysqli_query($con, "SELECT * FROM tblnews where newsStatus = 1");
						while($row4 = mysqli_fetch_array($result2))
						{
						$time = strtotime($row4["datePosted"]);
       					$newDate = date("M d, Y", $time);
						$id=$row4['newsID'];
						echo '<div class="col-lg-12" align="center">';
						echo '<h1>'.$row4['newsTitle'].'</h1>';
						echo '</div>';
						$result5 = mysqli_query($con, "SELECT * FROM tblnewsimage where newsID = $id and status=1");
						while($row5 = mysqli_fetch_array($result5))
						{
						echo '<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="'.$newDate.'" href="shared-resources/img/activityimage/'.$row5['newsImage'].'">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<img src="shared-resources/img/newsimage/'.$row5['newsImage'].'" alt="'.$row4['newsDesc'].'"">
						</li>';
					
					}
					}
					?>
		
						
					</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
	</section>
	<?php
include "shared-layouts/footer.php";
	?>
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>