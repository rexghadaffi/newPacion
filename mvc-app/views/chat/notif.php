<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include '../shared-layouts/_Layout.php';
?>

</head>
<body>
<div class="col-md-10">
            <!-- Data Table Goes Here-->
            <table width="100%">

            </table>
            <!-- End Data Table-->
</div>
</body>
</html>


<script src="../shared-scripts/custom-js/jquery-1.9.1.min.js"></script>
<script>
$(document).ready( function() {
done();
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
		$("table").append("<tr><td>"+this['id']+" </td><td>"+this['username']+" </td></tr>");
		});
		});
	}
</script>
