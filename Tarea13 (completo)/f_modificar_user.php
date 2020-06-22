<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="col-9">
                <h3>Cambio de Usuario y Correo</h3>
                <div class="card-body">
                <form class="form" action="modificar_user.php" method="post">
                    <div class="form-group">
                        <input value="" type="text" name="nombre" placeholder="Ingrese su nombre actual" class="form-contrl form-contrl.sm" required="">
                    </div>
                    <div class="form-group">
                        <input value="" type="text" name="nombre_nuevo" placeholder="Ingrese su nuevo nombre" class="form-contrl form-contrl.sm" required="">
                    </div>
                    <div class="form-group">
                        <input value="" type="text" name="correo" placeholder="Ingrese su correo actual" class="form-contrl form-contrl.sm" required="">
                    </div>
                    <div class="form-group">
                        <input value="" type="email" name="correo_nuevo" placeholder="Ingrese su nuevo correo" class="form-contrl form-contrl.sm" required="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cambiar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>

