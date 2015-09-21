<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OlympoGym</title>
    
    <link rel="shortcut icon" href="<?php echo $_webParams['ruta_img']; ?>olympo.png" />
    
    <!--Archivo CSS-->
    <link href="<?php echo $_webParams['ruta_css']; ?>bootstrap.css" rel="stylesheet">
    <link href="<?php echo $_webParams['ruta_css']; ?>shop-homepage.css" rel="stylesheet">
    <!--Archivo JS-->
    <script src="<?php echo $_webParams['ruta_js']; ?>jquery.js"></script>
    <script src="<?php echo $_webParams['ruta_js']; ?>jquery.slimscroll.js"></script>
    <script src="<?php echo $_webParams['ruta_js']; ?>extras/slimscroll.js"></script>
    <script src="<?php echo $_webParams['ruta_js']; ?>extras/menu_pegajoso.js"></script>
    <script src="<?php echo $_webParams['ruta_js']; ?>fastclick.min.js"></script>
    <script src="<?php echo $_webParams['ruta_js']; ?>bootstrap.min.js"></script>
    <!--Funcion de Facebook--> 
    <script> (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=125908714428652";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
    </script>
    

</head>

<body>
    <div class="container" >
        <img class="img-responsive" src="<?php echo $_webParams['ruta_img']; ?>cabecera2.png" alt="">
        <!-- Navigation -->
        <nav class="navbar navbar-default" >
            <div   id='div_pegajoso' >
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">OLYMPOGYM</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div  class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">INICIO</a>
                        </li>
                        <li>
                            <a href="#">NOSOTROS</a>
                        </li>
                        <li>
                            <a href="#">SERVICIOS</a>
                        </li>
                        <li>
                            <a href="#">CONTÁCTENOS</a>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                      </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>

        <div class="row">