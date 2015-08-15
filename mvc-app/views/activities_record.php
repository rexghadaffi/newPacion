<?php
include "../core/init.php";
redirect();
?>
<?php
include "../controller/activities/activity_class.php";
new activityClass();
?>

<script type="text/javascript">
$(document).ready(function(){
	 $("#navActivity").addClass('active');
});
</script>