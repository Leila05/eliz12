<?php
require_once 'conex.php';
// crear
function crear_usuario($conn, $nombre, $usuario,$contrasena,$correo ){
  $sql="INSERT INTO usuario (id, nombre, usuario, contrasena, correo, administrador)
  VALUES (NULL, '".$nombre."', '".$usuario."', '".$contrasena."', '".$correo."',0)";
  $filas=$conn->query($sql);
}
// modificar
function modificar_usuario($conn, $usuario, $correo,  $id){
  $sql="UPDATE usuario SET usuario = '".$usuario."', correo ='".$correo."' WHERE id=".$id;
  $filas=$conn->query($sql);
}
//cambiar password
function modificarContraseña($conn,$id,$contrasena,$nuevo,$confirmar){
  $cont_nueva=$nuevo;
  $confCont=$confirmar;
  $actualizar = $sql->query("SELECT * FROM usuario");
  $filas=$actualizar->fetch_assoc();
  if($filas['contrasena'] == $contrasena){
    if ($cont_nueva==$confCont) {
      $actualizado = $sql->query("UPDATE usuario SET contrasena='$contrasena' WHERE id='$id'");
      if($actualizado){
        echo "La contrseña fue cambiado correctamente";
      }else{
        echo "Se ha producido un error al acatualizar la contraseña";
      }
    }else {
    echo "Ambas contrseñas deben coincidir para realizar el cambio";
    }
  }else{
    echo "La contraseña que acaba de ingresar no existe";
  }
}
?>
