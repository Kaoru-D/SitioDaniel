<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Daniel | Registro Usuarios</title>
    <?php include_once('../Templates/head.php'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card">
                            <div class="col-2"></div>
                        </div>
                        <div class="card-body register-card-body">
                            <p class="login-box-msg"> <b> Registrar información</b></p>
                            <form action="../../Bussines/DataBase.php" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre de Usuario" id="txtNombreUsuario" name="txtNombreUsuario" maxlength="25" require>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-users"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Primer Nombre" id="txtPrimerNombre" name="txtPrimerNombre" maxlength="30" require>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Segundo Nombre" id="txtSegundoNombre" name="txtSegundoNombre" maxlength="30">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Primer Apellido" id="txtPrimerApellido" name="txtPrimerApellido" maxlength="30" require>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Segundo Apellido" id="txtSegundoApellido" name="txtSegundoApellido" maxlength="30">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" id="txtEmail" name="txtEmail" maxlength="70" require>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Cedula" id="txtCedula" name="txtCedula" maxlength="15" require>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-credit-card"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Celular" id="txtCelular" name="txtCelular" maxlength="11">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-mobile"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" rows="3" placeholder="Direccion" id="txtDireccion" name="txtDireccion"></textarea>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-map"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Clave" id="txtClave" name="txtClave" maxlength="45" require>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="fas fa-user"></span>
                                            <label>Perfil de Usuario</label>
                                            <select class="form-control select" style="width: 100%;" name="cmbPerfil" id="cmbPerfil">
                                                <option value="">Inventario</option>
                                                <option value="">Vendedor</option>
                                                <option value="">Administrador</option>
                                                <option value="">Super Usuario</option>
                                            </select>
                                        </div>
                                        <div class="col-2"></div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-block bg-gradient-primary">Registrar</button>
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php include_once('../Templates/footer.php') ?>
    </div>
    <?php include_once('../Templates/foot.php') ?>
</body>

</html>