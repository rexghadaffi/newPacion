<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include '../shared-layouts/_layout.php';
?>
</head>
<body>
<div id="container">
<table>
</table>
</body>
</html>



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
	$("#container").empty();	
	$.each(data.result, function(){
		$("#container").append("<table id="example"><tr><td>"+this['id']+" </td><td>"+this['username']+" </td></tr></table>");
		});
		});
	}
</script>
