<?php
session_start();
if(!isset($_SESSION['id']))
{
    
echo "<script>window.location.href='backend.php';</script>";
die();

}

?>

<?php include '../shared-layouts/_Layout.php'; ?>

<div class="col-md-10">
    <img src="../shared-resources/images/sorry.jpg">
</div>
<?php
 include '/modals/client_user.php';

?>


</body>

</html>