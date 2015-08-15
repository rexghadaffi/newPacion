<?php
include "../core/init.php";
redirect();
?>
<?php
include "../controller/client/user_class.php";
new userClass();
?>

<script type="text/javascript">
$(document).ready(function(){
	 $("#navClient").addClass('active');
});
</script>