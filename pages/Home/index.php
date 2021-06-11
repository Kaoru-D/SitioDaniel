<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Daniel | Home</title>
    <?php include_once('../Templates/head.php'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="../../img/imagen_carga.png" alt="Logo" height="100" width="200">
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="../Home/" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../Home/" class="nav-link">Home</a>
                </li>

            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../Home/" class="brand-link">
                <img src="../../img/logo-eae-blanco-768x189 (1).ico" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Sitio</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../img/usuario.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="../Home/" class="d-block">Usuario</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <?php include_once('../Templates/menuSuperUsuario.php') ?>
            </div>
        </aside>
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card">
                            <div class="col-4">                          
                            </div>
                            <?php 
                            if (isset($_GET['MsgType'])) {
                                $tipoMensaje=$_GET['MsgType'];
                                $mensaje=isset($_GET['MsgValue'])?$_GET['MsgValue']:"";
                                if ($tipoMensaje === "Err") {
                                    echo "<div class='alert alert-danger alert-dismissible container-fluid' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    <h5><i class='icon fas fa-ban'></i>Error!</h5>".$mensaje."</div>";
                                }
                                if ($tipoMensaje === "Ext") {
                                    echo "<div class='alert alert-success alert-dismissible container-fluid'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    <h5><i class='icon fas fa-check'></i> Alert!</h5>"
                                    .$mensaje."
                                  </div>";
                                }
                            }
                            
                            if (isset($_GET['Op'])) {
                                $opcion=$_GET['Op'];
                                if ($opcion === "RUser") {
                                    include_once('../Usuarios/Registrar.php');
                                }
                                elseif ($opcion === "RClient") {
                                    include_once('../Terceros/Registrar.php');
                                }
                                elseif ($opcion === "RProvider") {
                                    include_once('../Terceros/Registrar.php');
                                }
                                elseif ($opcion === "RProduct") {
                                    include_once('../Productos/Registrar.php');
                                }
                            }
                            ?>
                             <div class="col-4">                          
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <?php include_once('../Templates/footer.php') ?>
    </div>
    <?php include_once('../Templates/foot.php') ?>
</body>

</html>