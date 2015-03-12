<?php
unset($_COOKIE["idUsuario"]);
unset($_COOKIE["idTipoUsuario"]);
setcookie("idUsuario", "", time()-60*60*24*30, "/");
setcookie("idTipoUsuario", "", time()-60*60*24*30, "/");
header("Location: http://192.168.1.68/");
?>