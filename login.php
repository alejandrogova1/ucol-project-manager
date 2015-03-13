<?php
require_once("includes/functions.php");
if(isset($_COOKIE["idUsuario"])) {
    header("Location: index.php");
}
if (isset($_POST["usuario"])) {
    $result=query("SELECT * FROM usuarios WHERE Usuario='" . $_POST["usuario"] . "' AND Password='". $_POST["password"] . "'");
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result)==1) {

      /*$_SESSION["idUsuario"] = $row['idUsuario'];
      $_SESSION["idTipoUsuario"] = $row['idTipoUsuario'];*/

      // SET COOKIES
      $cookie_name = "idUsuario";
      $cookie_value = $row['idUsuario'];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 dia

      //$cookie_name = "idTipoUsuario";
      //$cookie_value = $row['idTipoUsuario'];
      //setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/");

      header("Location: index.php");
    }else{
        $loginError="Usuario o contraseña incorrecto";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCOL | Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="ucol-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <img src="img/escudo_ucol.png" width="180" height="180" />
            <h2>Universidad de Colima</h2>
            <h3>Administrador de Proyectos</h3>
            <h4>Inicia sesión</h4>
            <form class="m-t" role="form" action="" method="post">
                <div class="form-group">
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Inicia Sesión</button>

                <!--<a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>-->
            </form>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>