<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include '../shared-layouts/_layout.php';
?>
</head>
<body>

<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">           
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-wrench fa-fw"></span>&nbsp;Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#clientModal">Add Record</a></li>
                    <li><a href="#">Import Records</a></li>
                    <li><a href="#">Export Records</a></li>                   
                </ul>
            </div>
        </div>
        <div class="panel-body">

            <!-- Data Table Goes Here-->
            <table id="example" class="display" cellspacing="0">
                <thead>
                    <tr>                    
                        <th>UserID</th>                        
						<th>First Name</th>
                    </tr>
                </thead>               
                <tbody>

                </tbody>
            </table>
            <!-- End Data Table-->
        </div>
    </div>
</div>

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
    $('#example').dataTable({
        "ajax": "fetch.php",
        "columns": [
            { "data": "id" },
            { "data": "username" }
        ]			
		});	
		}
</script>
