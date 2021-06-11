<div class="content">

    <div class="row">
        <div class="col-2"></div>
    </div>

    <div class="card-body register-card-body">
        <p class="login-box-msg"> <b>Registrar información</b> </p>
        <form action="../../Bussines/DataBase.php" method="POST">
            <div class="card">
                <!--<div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                                <label for="customRadio1" class="custom-control-label">Cliente</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked>
                                                <label for="customRadio2" class="custom-control-label">Proveedor</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
            </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Identificación" id="txtIdentificacionT" name="txtIdentificacionT" maxlength="25" require>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-key"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre Completo" id="txtFullNombre" name="txtFullNombre" maxlength="255" require>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" id="txtEmailTerc" name="txtEmailTerc" maxlength="30">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Celular" id="txtCelular" name="txtCelular" maxlength="15">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-mobile"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Teléfono" id="txtTelefono" name="txtTelefono" maxlength="25">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-phone"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="3" placeholder="Dirección" id="txtDireccion" name="txtDireccion"></textarea>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-map"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="3" placeholder="Descripcion" id="txtDescripcion" name="txtDescripcion"></textarea>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-comment"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Información de contacto" id="txtContacto" name="txtContacto" maxlength="100">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>

            <div class="col-2"></div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <button type="submit" class="btn btn-block bg-gradient-primary">Registrar</button>
                    <input type="hidden" id="txtOperacion" name="txtOperacion" value="Registrar">
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</div>

</form>