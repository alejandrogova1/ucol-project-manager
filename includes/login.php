<?php
require_once("functions.php");

if (isset($_POST["usuario"])) {
    $result=query("SELECT * FROM usuarios WHERE Usuario='" . $_POST["usuario"] . "' AND Contraseña='". $_POST["password"] . "' AND Activo=1;");
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result)==1) {

      /*$_SESSION["idUsuario"] = $row['idUsuario'];
      $_SESSION["idTipoUsuario"] = $row['idTipoUsuario'];*/

      // SET COOKIES
      $cookie_name = "idUsuario";
      $cookie_value = $row['idUsuario'];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 dia

      $cookie_name = "idTipoUsuario";
      $cookie_value = $row['idTipoUsuario'];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/");

      header("Location: http://192.168.1.68/");
    }
}
?>
<!DOCTYPE html>
<html manifest="cache.mf">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Shirel">
    <title>Shirel | Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
    <link rel="shortcut icon" sizes="196x196" href="img/touch/touch-icon-196x196.png">
    <link rel="shortcut icon" href="img/touch/apple-touch-icon.png">
<script type="text/javascript">
        (function(document,navigator,standalone) {
            // prevents links from apps from oppening in mobile safari
            // this javascript must be the first script in your <head>
            if ((standalone in navigator) && navigator[standalone]) {
                var curnode, location=document.location, stop=/^(a|html)$/i;
                document.addEventListener('click', function(e) {
                    curnode=e.target;
                    while (!(stop).test(curnode.nodeName)) {
                        curnode=curnode.parentNode;
                    }
                    // Condidions to do this only on links to your own app
                    // if you want all links, use if('href' in curnode) instead.
                    if('href' in curnode && ( curnode.href.indexOf('href') || ~curnode.href.indexOf(location.host) ) ) {
                        e.preventDefault();
                        location.href = curnode.href;
                    }
                },false);
            }
        })(document,window.navigator,'standalone');
</script>
</head>
<body class="login-page-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="form-signin">
            <h2>Shirel</h2>
            <h3>Iniciar sesión</h3>
            <form class="m-t" role="form" action="" method="post">
                <div class="form-group">
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Iniciar sesión</button>
            </form>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Toastr -->
    <script src="../js/plugins/toastr/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
               toastr.options = {
                  "closeButton": false,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
               };

               toastr.info('Responsive Admin Theme');
            }, 1300);
        });
    </script>
</body>
</html>