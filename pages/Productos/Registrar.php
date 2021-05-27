<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Daniel | Registro de Productos</title>
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
                        <p class="login-box-msg"> <b> Registrar información </b></p>
                        <form action="../../Bussines/DataBase.php" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Código del Producto" id="txtCodigo" name="txtCodigo" maxlength="15" require>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-barcode"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nombre" id="txtNombreProducto" name="txtNombreProducto" maxlength="150" require>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-beer"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" rows="3" placeholder="Descripción detallada del Producto" id="txtDescripcionProducto" name="txtDescripcionProducto"></textarea>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-comment"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Unidad de Medida" id="txtUnidadMedida" name="txtUnidadMedida" maxlength="45" require>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-calculator"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Marca del Producto" id="txtMarcaProducto" name="txtMarcaProducto" maxlength="45">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-tag"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="Precio Actual" id="txtPrecioActual" name="txtPrecioActual" maxlength="11" min="0">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-coins"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="Cantidad Actual" id="txtCantidadActual" name="txtPrecioActual" min="0">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-shopping-cart"></span>
                                            </div>
                                        </div>
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