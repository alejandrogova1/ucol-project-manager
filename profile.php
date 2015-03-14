<?php
require_once("includes/functions.php");
if(!isset($_COOKIE["idUsuario"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCOL | Perfil de Usuario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
<?php
    require_once("includes/menu.php");
?>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
          <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li><a href="includes/logout.php"><i class="fa fa-sign-out"></i> Cerrar Sesión</a></li>
            </ul>
          </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Perfil de Usuario</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a>Usuarios</a>
                        </li>
                        <li class="active">
                            <strong>Perfil de usuario</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Detalle del perfil</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="img/profile_big.jpg">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>Alejandro Gomez</strong></h4>
                                <p><i class="fa fa-map-marker"></i> Universidad de Colima</p>
                                <h5>
                                    Acerca de
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                </p>
                            </div>
                    </div>
                </div>
                    </div>
                <div class="col-md-8">

                </div>
            </div>
        </div>

        </div>
        </div>
    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Peity -->
    <script src="js/demo/peity-demo.js"></script>

</body>
</html>
