<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <title>STI Alumni Information System</title>
<link href="../../shared-resources/bootstrap-3/css/bootstrap.css" rel="stylesheet" />
<link href="../../shared-resources/bootstrap-3/css/bootstrap-theme.min.css" rel="stylesheet" />
<link href="../../shared-resources/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="../../shared-resources/media/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="../../shared-resources/resources/syntax/shCore.css">
<link rel="stylesheet" type="text/css" href="../../shared-resources/resources/demo.css">
<link rel="stylesheet" type="text/css" href="../../shared-resources/notifyme-master/assets/css/notifyme.css">
<script src="../../shared-resources/notifyme-master/assets/js/modernizr.js"></script>
<style>
#testing::-webkit-scrollbar {display:none;}
#testing::-moz-scrollbar {display:none;}
#testing::-o-scrollbar {display:none;}
#testing::-google-ms-scrollbar {display:none;}
#testing::-khtml-scrollbar {display:none;}
</style>
</head>
<script type="text/javascript" src="../../shared-resources/notifyme-master/assets/js/jquery.js"></script>	
<script type="text/javascript" src="../../shared-resources/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../shared-resources/resources/syntax/shCore.js"></script>
<script type="text/javascript" src="../../shared-resources/resources/demo.js"></script>
<script src="../../shared-resources/notifyme-master/assets/js/notifyme.js"></script>
<script src="../../shared-resources/bootstrap-3/js/bootstrap.min.js"></script>
<script src="../../shared-scripts/custom-js/form-validation.js"></script>
<script src="../../shared-scripts/custom-js/notification.js"></script>
<script src="../../shared-scripts/custom-js/jquery-1.9.1.min.js"></script>
<script src="../../shared-resources/tinymce/tinymce.min.js"></script>
<body>
<div class="container" style="margin-top:20px;">  
<div class="col-md-12">
<div class="panel panel-primary">
<!-- Panel Heading -->
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-comments-o fa-fw fa-2x"></i>Alumni Chat</h3>
  </div>
<!-- End of Panel Heading --> 

<!-- Panel Body -->
  <div class="panel-body"  style="height: 450px; margin-top:30px; background-image: url('../../../client/shared-resources/img/');">
	<!-- Side Content -->
	<div class="col-md-2" style="height: 100%;"><h5 style="color: red;"><i class="fa fa-graduation-cap" style="color: red;"></i>Chat Room(s)</h5></div>
	<!-- End of Side Content -->
	
	<!-- Chat body -->
	<div class="col-md-8" id="subok">
	<div class="col-md-12" id="testing" style="background-color: #FFFACD; max-height: 400px; border-left: thin solid grey; border-right: thin solid grey; border-radius: 5px; overflow: hidden; overflow-y: auto;">
	<div id="ibigaymo">
	
	</div>
	</div>
	</div>
	<!-- End of Chat body -->
	
	<!-- Right content -->
	<div class="col-md-2"><h5 style="color: green;"><i class="fa fa-user fa-fw" style="color: green;"></i>Online User(s)</h5></div>  
	<!-- End of right Content -->
	</div>
<!-- End of Panel Body -->
	<div class="panel-footer clearfix">
		<p class="col-md-7 col-md-offset-2">
		<input type="text" class="form-control">
		
		</input>
		</p>
		<p class="col-md-1">
		<button class="btn btn-success btn-sm" name="btnsend" id="btnsend">Send</button><span id="loading"><img src="../../../client/shared-resources/img/loading.gif" width="45px" height="30px"></span>
		</p>
	</div>
 
</div>
</div>
</div>


</body>
</html>

<script>
$(document).ready( function() {
$("#testing").animate({ scrollTop: 1000 }, 1000);
return false;
});
</script>

<script>
$(document).ready( function() {
done();

$("#loading").hide();
$("#btnsend").click( function(){
$("#btnsend").hide();
$("#loading").show();
$.ajax({
  type: "POST",
  url: url,
  data: data,
  success: success
});
});
});
		
function done(){
	setTimeout( function(){
		updates();
		done();
		}, 200);	
}
	
function updates(){
	$.getJSON("fetch.php", function(data) {
	$("#ibigaymo").empty();	
	$.each(data.result, function(){
		$("#ibigaymo").append("<div class='col-md-12' style='border-bottom: thin solid silver; margin: 2px; padding: 5px; width: 100%;'>"+this['id']+" "+this['username']+"</div>");
		});
		});
	}
</script>