<?php
include "shared-layouts/html.php";
include "shared-layouts/header.php";
?>
	<!-- end header -->
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

   <div class="panel panel-default">
        <div class="panel-heading clearfix">           
            <h4>Users</h4>
        </div>
        <div class="panel-body">

            <!-- Data Table Goes Here-->
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>                    
                        <th>Name</th>
                        <th>Action</th>						
                    </tr>
                </thead>               
                <tbody>
                	<?php
                	$sqluser = mysqli_query($con, "SELECT * FROM tblclientuser ORDER BY userID ASC");
                	while($rowuser = mysqli_fetch_array($sqluser))
                	{
                		echo "<tr>";
                		echo "<td> ". $rowuser['userFirstName'] ." ".$rowuser['userLastName']." </td>";
                			echo '<td  align="center">';

	 	 echo'&nbsp;<a href="#usersModal'.$rowuser["userID"].'" data-toggle="modal" data-backdrop="static" data-keyboard="false">View Details</a>';
	    include "modal/users.php";
		

	   echo'</td>';
                		echo "</tr>";

                		
                	}

                	?>
                </tbody>
            </table>
            <!-- End Data Table-->
        </div>
    </div>

	


	</section>

	<?php
include "shared-layouts/footer.php";
	?>