<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <title>STI Alumni Information System</title>
   <?php 
    include '../shared-scripts/_css.php';
   
   ?>

  
	<style>
	   body { 
	   padding-top: 70px; 
	   font-style:calibri;
	   font-size:11px;
	   }
     .custom-header {
      background-color: #ece9e9;
     color: #7f7f80;
     }
	</style>
  </head>
  <body>
    
    <!-- Nav Header Goes Here... -->
    <?php 
      include '_admin-navbar.php';
      include '_admin-sidebar.php';
      include '../shared-scripts/_js.php';
     ?>  	 
    <!-- END Nav Header -->
    
    <!-- Container Goes Here -->
   
        <!-- Body Goes Here -->
			 
			  
			  
    <!-- END Container -->

<script type="text/javascript">
$(document).ready(function(){
    $('#example').DataTable();
});
</script>
