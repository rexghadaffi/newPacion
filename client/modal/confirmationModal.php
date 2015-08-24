<div class="modal fade bs-example-modal-sm" id="registrationModal"  tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm">
		<div class="modal-content ">
			<div class="modal-header btn-custom" >
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel" style="color:white;font-size:24px" align="center">Confirmation</h4>	 
			</div>
			<form method="POST" >
				<div class="modal-body" align="center">
					<button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">No</button>
					<button type="submit" class="btn btn-success btn-lg" name="btnregister">Yes</button>
				</div>  
			</form>	
	</div>
	</div>
</div>


<?php
if (isset($_POST['btnregister']))
{
	echo "<script>alert('dsafdsfas'); </script>";
	
}

?>