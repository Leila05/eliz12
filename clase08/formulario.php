<?php
session_start();
if (!$_SESSION['person']) {
    $_SESSION['person'] = [];
}
if($_POST){
    array_push($_SESSION['person'], 
    [
        "nombre" => $_POST['nombre'], 
        "apellido" => $_POST['apellido'],
        "fec_nac" => $_POST['fec_nac']
    ]);
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 08 - Tarea</title>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <script src="libs/jquery/jquery.min.js" charset="utf-8"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Datos</a>
    </nav><br>
    <div class="container" id="formu">
        <div class="card bg-light text-dark">
            <div class="card-body">
                <h3 class="card-title">Formulario</h3>
                    <form class="" action="formulario.php" method="post">
                    <input type="text" name="nombre" value="" placeholder="Nombre" class="form-control"><br>
                    <input type="text" name="apellido" value="" placeholder="Apellido" class="form-control"><br>
                    <input type="date" name="fec_nac" value="" placeholder="Fecha de Nacimiento" class="form-control"><br>
                    <center><button type="submit" name="" class="btn btn-info">Enviar</button>
                    <a href="destruir.php"><input type="button" name="destroy" class="btn btn-secondary" value="Cerrar"/></a></center>
                </form>
            </div>
        </div><br>

        <table class="table" border="2">
            <thead class="thead-dark">
                <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
            </tr>
            </thead>
            <?php 
            $personas = $_SESSION['person'];
            foreach($personas as $value){
                echo '<tr><td>'.$value['nombre'].'</td><td>'.$value['apellido'].'</td><td>'.$value['fec_nac'].'</td></tr>';
            }
            ?>
        </table>
    </div>
</body>
</html>