<?php
include "../core/init.php";
redirect();
?>

<?php
include '../controller/topics/topics_class.php';
new topicsClass();
?>

<script type="text/javascript">
$(document).ready(function(){
	 $("#navTopics").addClass('active');
});
</script>