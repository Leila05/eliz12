<?php
  function sugerenciasTodo($conexion){
    $sql="select * from sugerencias";
    $filas=$conexion->query($sql);
    //echo "<pre>";
    return $filas;
  }
  function sugerenciaAgregar($conexion, $telefono, $sugerencias){
    $sql="INSERT INTO sugerencia (id, nombre, telefono, correo, sugerencias, usuario_id)
    VALUES (NULL, '".$_SESSION['nombre']."', '".$telefono."', '".$_SESSION['correo']."', '".$sugerencias."',".$_SESSION['id'].")";
    $filas=$conexion->query($sql);
  }
    function sugerenciaModificar($conexion,$telefono, $sugerencias,$id ){
      $sql="UPDATE sugerencia SET telefono= '".$telefono."', sugerencias='".$sugerencias."' WHERE id=".$id;
      $filas=$conexion->query($sql);
    }

  function sugerenciaBorrar($conexion, $id){
    $sql="DELETE FROM sugerencia WHERE id =".$id;
    $filas=$conexion->query($sql);
      //print_r($filas);
  }
  function sugerenciaTraerId($conexion, $id){
    $sql="select * FROM sugerencia WHERE id =".$id;
    $filas=$conexion->query($sql);
    return $filas->fetch_assoc();
  }
?>
