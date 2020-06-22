<?php
session_start();
require_once("libs/conex.php");
require_once("libs/acceso.lib.php");
if ($_POST) {
  actualizarUsuario($conn,$_SESSION['id'], $_POST['nombre'], $_POST['correo']);
}
header("Location:index.php");
?>
