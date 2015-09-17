<?php
include "shared-layouts/html.php";
include "shared-layouts/header.php";
?>
<head>
<style>
body,td,th {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #333;
}
.contents{
	margin: 20px;
	padding: 20px;
	list-style: none;
	background: #F9F9F9;
	border: 1px solid #ddd;
	border-radius: 5px;
}
.contents li{
    margin-bottom: 10px;
}

/* Pagination style */
.pagination1{margin:0;padding:0;}
.pagination1 li{
	display: inline;
	padding: 6px 10px 6px 10px;
	border: 1px solid #ddd;
	margin-right: -1px;
	font: 15px/20px Arial, Helvetica, sans-serif;
	background: #FFFFFF;
	box-shadow: inset 1px 1px 5px #F4F4F4;
}
.pagination1 li a{
    text-decoration:none;
    color: rgb(89, 141, 235);
}
.pagination1 li.first {
    border-radius: 5px 0px 0px 5px;
}
.pagination1 li.last {
    border-radius: 0px 5px 5px 0px;
}
.pagination1 li:hover{
	background: #CFF;
}
.pagination1 li.active{
	background: #F0F0F0;
	color: #333;
}
</style>
</head>
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
		
			</div>
		</div>
	</div>	
		</section>
<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-offset-1">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="shared-resources/img/slides/4.jpg" alt="" />
              </li>
              <li>
                <img src="shared-resources/img/slides/4.jpg" alt="" />
              </li>
              <li>
                <img src="shared-resources/img/slides/6.jpg" alt="" />
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
</section>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Forum</li>
				</ul>
			</div>
		</div>
	</div>
</section>


<!-- mahalaga tong div na to -->
<br/><hr/>
<div id="results2"></div>
<!-- fuck you -->
<?php include "shared-layouts/footer.php"; ?>
<script type="text/javascript">
$(document).ready(function() {
	$("#results2" ).load( "controller/forum/fetch_category.php");
	$("#results2").on( "click", ".pagination1 a", function (e){
		e.preventDefault();
		$(".loading-div").show(); 
		var page = $(this).attr("data-page"); 
		$("#results2").load("controller/forum/fetch_category.php",{"page":page}, function(){
			$(".loading-div").hide();
		});		
	});
});
</script>



