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
<div class="container">  
<div class="col-md-10 col-md-offset-1" >
<div class="panel panel-primary">
<!-- Panel Heading -->
  <div class="panel-heading">
    <h3 class="panel-title">Alumni Chat</h3>
  </div>
<!-- End of Panel Heading --> 

<!-- Panel Body -->
  <div class="panel-body"  style="height: 500px;">
	<!-- Side Content -->
	<div class="col-md-2">Side content</div>
	<!-- End of Side Content -->
	
	<!-- Chat body -->
	<div class="col-md-8" style="max-height: 450px; overflow-hidden;">
	<table width="100%">
	
	</table>
	</div>
	<!-- End of Chat body -->
	
	<!-- Right content -->
	<div class="col-md-2">Online User(s)</div>  
	<!-- End of right Content -->
	</div>
<!-- End of Panel Body -->
	<div class="panel-footer clearfix">
		<p class="col-md-7 col-md-offset-2">
		<input type="text" class="form-control">
		
		</input>
		</p>
		<p class="col-md-1">
		<button class="btn btn-success btn-sm" name="btnsend" id="btnsend">Send</button>
		</p>
	</div>
 
</div>
</div>
</div>


</body>
</html>

<script>
$(document).ready( function() {
done();

$("#btnsend").click( function(){
$("#btnsend").hide();
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
	$("table").empty();	
	$.each(data.result, function(){
		$("table").append("<div class='col-md-12' style='background-color:silver; margin: 2px; padding: 5px; border-radius:5px; width: 100%;'><tr><td>"+this['id']+" </td><td>"+this['username']+" </td></tr></div>");
		});
		});
	}
</script>