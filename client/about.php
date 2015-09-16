<?php
include "shared-layouts/html.php";
include "shared-layouts/header.php";
include "core/database.php";
?>
	<!-- end header -->
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>About</span> Us</h2>
						
						<?php     
              
        				$result = mysqli_query($con, "SELECT * FROM tblcontent where contentID = 1");
        				$row2 = mysqli_fetch_array($result);
        				echo $row2["content"];
        				?>
                        
                        <h3 style="color:#4791FF;"><span>Our</span> Vision</h3>
                       <?php     
              
        				$result1 = mysqli_query($con, "SELECT * FROM tblcontent where contentID = 3");
        				$row3 = mysqli_fetch_array($result1);
        				echo $row3["content"];
        				?>
                         <h3 style="color:#4791FF;"><span>Our</span> Mission</h3>
                        <?php     
              
        				$result2 = mysqli_query($con, "SELECT * FROM tblcontent where contentID = 4");
        				$row4 = mysqli_fetch_array($result2);
        				echo $row4["content"];
        				?>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<?php
include "shared-layouts/footer.php";
	?>