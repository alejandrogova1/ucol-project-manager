<?php
require_once("functions.php");
unset($_COOKIE["idUsuario"]);
setcookie("idUsuario", "", time()-60*60*24*30, "/");
/*unset($_COOKIE["idTipoUsuario"]);*/
/*setcookie("idTipoUsuario", "", time()-60*60*24*30, "/");*/
header("Location: /ucol");
?>