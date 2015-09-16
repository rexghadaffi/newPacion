<?php
include "shared-layouts/html.php";
include "shared-layouts/header.php";
?>
	<!-- end header -->
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Contact</span> Us</h2>
						<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="642" height="443" src="https://maps.google.com/maps?hl=en&q=sti college cubao p tuazon&ie=UTF8&t=roadmap&z=17&iwloc=B&output=embed"><div><small><a href="http://www.embedgooglemaps.com">embed google map</a></small></div><div><small><a href="http://embedgooglemaps.com">by embedgooglemaps.com</a></small></div></iframe>						
					    
					    <?php     
              
        				$result1 = mysqli_query($con, "SELECT * FROM tblcontent where contentID = 5");
        				$row3 = mysqli_fetch_array($result1);
        				echo $row3["content"];
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