<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

    <title>STI College Cubao</title>

    <link href="../shared-resources/Metro-UI/build/css/metro.css" rel="stylesheet">
    <link href="../shared-resources/Metro-UI/build/css/metro-icons.css" rel="stylesheet">
    <link href="../shared-resources/Metro-UI/build/css/metro-responsive.css" rel="stylesheet">
      <link href="../shared-resources/Metro-UI/build/css/metro-schemes.css" rel="stylesheet">
    <link href="../shared-resources/Metro-UI/build/css/docs.css" rel="stylesheet">


    <script src="../shared-resources/Metro-UI/build/js/jquery-2.1.3.min.js"></script>
    <script src="../shared-resources/Metro-UI/build/js/metro.js"></script>
 

    
    <script src="../shared-resources/Metro-UI/build/js/docs.js"></script>
    <script src="../shared-resources/Metro-UI/build/js/run_prettify.js"></script>
    <script src="../shared-resources/Metro-UI/build/js/js/ga.js"></script>
<script src="../shared-scripts/custom-js/login-validation.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>




    <style>
        .login-form {
            width: 25rem;
            height: 18.75rem;
            position: fixed;
            top: 50%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(1);
            transform: scale(1);
            border:1px;
            border-style: solid;
            border-color: black;
			data-backdrop="background-color:green";
        }
    </style>

    <script>
	
        /*
        * Do not use this is a google analytics fro Metro UI CSS
        * */
        if (window.location.hostname !== 'localhost') {

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-58849249-3', 'auto');
            ga('send', 'pageview');

        }


        $(function(){
            var form = $(".login-form");

            form.css({
                opacity: 1,
				
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s",

				
            });
        });
    </script>
</head>
<body class="bg-white" >
  
   <div class="cell padding20" style="width: 10%; z-index: 1000; position: absolute; top: 250px; left: 560px">
                        <div id="loadingBar"  data-role="preloader" data-type="ring" data-style="dark" style="margin: auto"></div>
                    </div>
        
        <?php 
include "../controller/Login/login_controller.php";
?>

    <div class="login-form padding20 block-shadow">
        <form method="POST">
            <h3 >Sign In to STI Alumni</h3>
            <hr class="thin">
            
            <br>
            <div class="input-control text full-size" data-role="input">
			
                <input type="text"  name="username" id="username" placeholder="Enter Username">
				
                <label for="user_login">Username:</label>
				
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
            <br />
            <br />
			
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">User password:</label>
                <input type="password" name="password" id="password" placeholder="Enter Password">
                <button class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>
            <br />
            <br />
            <div class="form-actions">
                <button type="submit" id="btnlogin" name="btnlogin" class="button rounded large-button loading-pulse lighten primary">Sign In</button>
                <button type="button" class="button link">Forgot Password?</button>
            </div>

        </form>
    </div>
	
<script>$('#loadingBar').hide();</script>
	


</body>
</html>
