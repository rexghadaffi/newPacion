<?php
include 'controller/forum/forum_class.php';
new forumClass();
if(!isset($_SESSION['id']))
{
echo "<script>window.location='index.php'; </script>";
}
?>


<script type="text/javascript">
$(document).ready(function(){
	 $("#navNews").addClass('active');
});
</script>