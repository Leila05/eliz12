<?php
require_once("libs/conex.php");
function usuariovalidar($usuario, $contrasena, $conn){
  $sql='SELECT * FROM usuario where usuario="'.$usuario.'" and contrasena= "'.$contrasena.'" ';
  $filas=$conn->query($sql);
  if ($filas->num_rows==1){
    $d=$filas->fetch_assoc();
    $_SESSION['id']=$d['id'];
    $_SESSION['nombre']=$d['nombre'];
    $_SESSION['usuario']=$d['usuario'];
    $_SESSION['correo']=$d['correo'];
    $_SESSION['administrador']=$d['administrador'];
    }
    else {
      
    }
  }
  function usuariosalir(){
    session_destroy();
  }


 ?>
