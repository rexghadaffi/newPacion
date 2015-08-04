
<!DOCTYPE html>

<html>
 <head>
    <meta name="viewport" content="width=device-width" />
    <title>TES</title>
    <link href="shared-resources/bootstrap-3/css/bootstrap.min.css" rel="stylesheet" />
<link href="shared-resources/bootstrap-3/css/bootstrap-theme.min.css" rel="stylesheet" />
<link href="shared-resources/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="shared-resources/media/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="shared-resources/resources/syntax/shCore.css">
<link rel="stylesheet" type="text/css" href="shared-resources/resources/demo.css">

</head>

  <body>

  <div class="container" id="btn-custom"  style="margin-top:8%;padding-top:3%;padding-bottom:3%;width:40%">
    <h2 class="text-light" align="center">Sign In to STI Alumni</h2>
        <hr class="thick btn-primary">
        <form method="POST" action="controller/Login/login_controller.php">
   <?php $url = "http://$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]";?> 
 <div class="row">
    <div class="col-md-3"></div>
  <div class="col-md-6">
       <label style="font-size:16px">Username :</label>
      <input type="text" class="form-control" id="txtUsername" name="username" placeholder="Enter Username">
      </div>
 
  </div>
  
  <div class="row" style="margin-top:2%">
    <div class="col-md-3"></div>
  <div class="col-md-6">
   

     <label  style="font-size:16px">Password :</label>
      <input type="password" class="form-control" id="txtPassword" name="password" placeholder="Enter Password">
  
  </div>
   

 
  </div>

    <div class="row" style="margin-top:2%">
    <div class="col-md-3"></div>
  <div class=" col-md-6">
    
    
      <button type="submit" name="btnlogin" id="btnLogin" class="btn btn-primary btn-group" style="margin-right:10%">Sign in</button>
 <a href="" style="font-size:12px"> Forgot Password? </a>

    </div>  
     
    </div>
</form>
    </div>

    
<script type="text/javascript" src="shared-resources/resources/demo.js"></script>

<script src="shared-resources/bootstrap-3/js/bootstrap.min.js"></script>

    
    </body>
    </html>