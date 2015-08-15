<?php
include "../core/init.php";
redirect();
?>
<?php
include "../controller/admin/admin_class.php";
new adminClass();
?>

<script type="text/javascript">
$(document).ready(function(){
	 $("#navAdmin").addClass('active');
});
</script>