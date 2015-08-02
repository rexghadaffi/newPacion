<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>PACION</title>
    <!-- Metro UI CSS-->
    <link href="shared-resources/Metro-UI/build/css/metro.css" rel="stylesheet" />
    <link href="shared-resources/Metro-UI/build/css/metro-icons.css" rel="stylesheet" />
    <!-- Metro UI JS-->
	<script src="shared-scripts/custom-js/jquery-1.9.1.min.js"></script>   
    <script src="shared-resources/Metro-UI/build/js/metro.js"></script>

    
    <script src="js/tes/user-alert.js"></script>
</head>
<body>    

  
        <form  method="POST" action="controller/Login/login_controller.php">             
            <h3 class="text-light">Sign In to STI Alumni</h3>
            <hr class="thin">
                         
                  <input type="text" name="username" id="txtUsername">
                <input type="password"  name="password" id="txtPassword">
                <button type="submit" name="btnlogin">signin</button>
        </form>
    

    <!-- hit.ua -->
    <a href="http://hit.ua/?x=136046" target="_blank">
        <script language="javascript" type="text/javascript"><!--
    Cd = document; Cr = "&" + Math.random(); Cp = "&s=1";
    Cd.cookie = "b=b"; if (Cd.cookie) Cp += "&c=1";
    Cp += "&t=" + (new Date()).getTimezoneOffset();
    if (self != top) Cp += "&f=1";
    //--></script>
        <script language="javascript1.1" type="text/javascript"><!--
    if (navigator.javaEnabled()) Cp += "&j=1";
    //--></script>
        <script language="javascript1.2" type="text/javascript"><!--
    if (typeof (screen) != 'undefined') Cp += "&w=" + screen.width + "&h=" +
    screen.height + "&d=" + (screen.colorDepth ? screen.colorDepth : screen.pixelDepth);
    //--></script>
      

    <!-- / hit.ua -->       
        <script src="shared-scripts/custom-js/login-validation.js"></script>
</body>
</html>