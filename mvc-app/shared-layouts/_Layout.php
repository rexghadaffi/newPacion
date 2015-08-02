<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <title>Hey</title>
   <?php 
    include '../shared-scripts/_css.php';
    include '../shared-scripts/_js.php';
   ?>

  
	<style>
	   body { 
	   padding-top: 70px; 
	   font-style:calibri;
	   font-size:12px;
	   }
	</style>
  </head>
  <body>
    
    <!-- Nav Header Goes Here... -->
    <?php include '_admin-navbar.php';  include '_admin-sidebar.php'; ?>  	 
    <!-- END Nav Header -->
    
    <!-- Container Goes Here -->
   
        <!-- Body Goes Here -->
			 
			  
			  
    <!-- END Container -->
<script type="text/javascript" src="../shared-resources/notifyme-master/assets/js/jquery.js"></script>	
<script type="text/javascript" src="../shared-resources/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../shared-resources/resources/syntax/shCore.js"></script>
<script type="text/javascript" src="../shared-resources/resources/demo.js"></script>
<script src="../shared-resources/notifyme-master/assets/js/notifyme.js"></script>
<script src="../shared-resources/bootstrap-3/js/bootstrap.min.js"></script>
<script src="../shared-scripts/custom-js/form-validation.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#example').DataTable();
});
</script>
