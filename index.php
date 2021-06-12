<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sitio de Daniel | Inicio de Sesión</title>
  <link rel="shortcut icon" href="img/sites_google_com-E-learning_E (1).ico" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <?php
    if (isset($_GET['MsgType'])) {
      $tipoMensaje = $_GET['MsgType'];
      $mensaje = isset($_GET['MsgValue']) ? $_GET['MsgValue'] : "";
      if ($tipoMensaje === "Err") {
        echo "<div class='alert alert-danger alert-dismissible container-fluid' role='alert'>
       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
       <h5><i class='icon fas fa-ban'></i>Error!</h5>" . $mensaje . "</div>";
      }
    }
    ?>
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a class="h1"><b>Inicio de Sesión</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Ingresa tu usuario para iniciar sesión</p>

        <form action="Bussines/usuarios.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Usuario" id="txtUsuario" name="txtUsuario" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" id="txtClave" name="txtClave" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <!-- /.col -->
          <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
              <button type="submit" class="btn btn-primary btn-block">
                Iniciar
              </button>
              <input type="hidden" id="txtOperacion" name="txtOperacion" value="Login">
            </div>
            <div class="col-3"></div>
            <!-- /.col -->
            <!-- </div>
        </form>
        <p></p>
        <p class="text-center">
          <a href="pages/forgot-password.html"> Olvidé mi contraseña</a>
        </p>
        <p class="text-center">
          <a href="pages/register.html" class="text-center">Registrar nuevo usuario</a>
        </p>
      </div>
       /.card-body -->
          </div>
          <!-- /.card -->
      </div>
      <!-- /.login-box -->

      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.min.js"></script>
</body>

</html>