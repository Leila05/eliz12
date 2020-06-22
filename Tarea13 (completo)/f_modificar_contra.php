<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <script src="libs/jquery/jquery.js" charset="utf-8"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="col-9">
          <h3>Cambio de Contraseña</h3>
          <div class="card-body">
              <form class="form" action="modificar_contra.php" method="post">
              <div class="form-group">
                <input value="" type="password" name="contrasena" placeholder="Contraseña Actual" class="form-contrl form-contrl.sm" required="">
              </div>
              <div class="form-group">
                <input value="" type="password" name="nuevo" placeholder="Contraseña Nueva" class="form-contrl form-contrl.sm" required="">
              </div>
              <div class="form-group" >
                <input value="" type="password" name="confirmar" placeholder="Confirmar Contraseña Nueva" class="form-contrl form-contrl.sm" required="">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Cambiar</button>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </body>
</html>

