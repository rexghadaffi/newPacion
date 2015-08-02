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

    <!-- Login Form  Snippets-->
    <style>
        .login-form {
            width: 400px;
            height: 300px;
            position: fixed;
            top: 50%;
            margin-top: -150px;
            left: 50%;
            margin-left: -200px;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
    </style>
    <script>

        /*
        * Do not use this is a google analytics fro Metro UI CSS
        * */
        if (window.location.hostname !== 'localhost') {

            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-58849249-3', 'auto');
            ga('send', 'pageview');

        }


        $(function () {
            var form = $(".login-form");

            form.css({
                opacity: 1,
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s"
            });
        });
    </script>
    <script src="js/tes/user-alert.js"></script>
</head>
<body>    
	<div class="align-center padding0"  style="position:relative;top:30px">
		  <img src="shared-resources/images/login-banner.jpg" alt="Mountain View" style="width:400px;height:125px;">        
    </div>
    <div class="login-form padding20 block-shadow bg-grayLighter" style="opacity: 1; -webkit-transform: scale(1); transform: scale(1); -webkit-transition: 0.5s; transition: 0.5s;">
        <form runat="server" id="form1" method="post">             
            <h3 class="text-light">Sign In to STI Alumni</h3>
            <hr class="thin">
            <br>
            <div id="divusername" class="input-control text full-size" data-role="input">
                <label for="user_login">Username:</label>
                <input type="text" name="user_login" id="txtUsername"
                    runat="server"
                    class="textclear"                   
                    required
                    data-role="popover"                 
                    data-popover-shadow="true"
                    data-popover-position="right"
                    data-popover-text="please provide your username"
                    data-popover-background="bg-red"
                    data-popover-color="fg-white"
                    style="padding-right: 36px;">
                <button class="button helper-button clear" tabindex="-1" type="button"><span class="mif-cross"></span></button>
            </div>
            <br>
            <br>
            <div id="divpassword" class="input-control password full-size" data-role="input">
                <label for="user_password">Password:</label>
                <input type="password"  name="user_password" id="txtPassword"                   
                    runat="server"
                    class="textclear"
                    required
                    data-role="popover"                                     
                    data-popover-shadow="true"
                    data-popover-position="right"
                    data-popover-text="please provide your password"
                    data-popover-background="bg-red"
                    data-popover-color="fg-white"
                     style="padding-right: 36px;">
                <button class="button helper-button reveal" tabindex="-1" type="button"><span class="mif-looks"></span></button>
            </div>
            <br>
            <br>
            <div class="form-actions">
                <a  href="views/home.php" id="btnLogin" onclick="ValidateLoginFields(event);" class="button primary">Sign In</a>
                <div class="place-right">
                    <a href="#">Forgot Password?</a>
                </div>              
            </div>
        </form>
    </div>

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