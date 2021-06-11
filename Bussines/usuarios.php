<?php
include_once('../Entidades/usuario.php');
include_once('../DataAccess/usuariosData.php');
if (isset($_POST['txtOperacion'])) {
    $operacion=$_POST['txtOperacion'];
    if ($operacion==="Registrar") {
        $objClsUsuarioData=new clsUsuariosData();
        if ($objClsUsuarioData->registrarUsuario(ObtenerDatosFormulario())) {
            $mensaje="Operación ejecuatda correctamente";
            header('Location:../pages/Home/?MsgType=Ext&MsgValue'.urldecode($mensaje));
        }else {
            EnviarMensajeError();
        }
        ;
    }
}elseif ($operacion === "Login") 
{
    $objClsUsuarioData = new clsUsuariosData();
    $objClsUsuarioEntidad = new clsUsuarioEntidad();
    if (isset($_POST['txtUsuario'])) 
    {
        $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtUsuario']);
        if (isset($_POST['txtClave'])) 
        {
            $objClsUsuarioEntidad->setearPassUsuario($_POST['txtClave']);
            $objClsUsuarioData->autenticarUsuario($objClsUsuarioEntidad);
        }else
        {
            EnviarMensajeError();
        }
    }else
    {
        EnviarMensajeError();
    }
}
else
{
    EnviarMensajeError();
}
function EnviarMensajeError()
{
    $mensaje="Ocurrió un error en la operación ...</br>Intenta nuevamente";
    //header('Location:../pages/Home/?MsgType=Err&MsgValue='.urlencode($mensaje));
}
function ObtenerDatosFormulario()
{
    $objClsUsuarioEntidad=new clsUsuarioEntidad();
    if (isset($_POST['txtNombreUsuario'])) {
        $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtNombreUsuario']);
        if (isset($_POST['txtPrimerNombre'])) {
            $objClsUsuarioEntidad->setearPrimerNombre($_POST['txtPrimerNombre']);
            if (isset($_POST['txtSegundoNombre'])) {
                $objClsUsuarioEntidad->setearSegunNombre($_POST['txtSegundoNombre']);
                if (isset($_POST['txtPrimerApellido'])) {
                    $objClsUsuarioEntidad->setearPrimerApellido($_POST['txtPrimerApellido']);
                    if (isset($_POST['txtSegundoApellido'])) {
                        $objClsUsuarioEntidad->setearSegundoApellido($_POST['txtSegundoApellido']);
                        if (isset($_POST['txtEmail'])) {
                            $objClsUsuarioEntidad->setearEmail($_POST['txtEmail']);
                            if (isset($_POST['txtCedula'])) {
                                $objClsUsuarioEntidad->setearIdentificacion($_POST['txtCedula']);
                                if (isset($_POST['txtCelular'])) {
                                    $objClsUsuarioEntidad->setearCelular($_POST['txtCelular']);
                                    if (isset($_POST['txtDireccion'])) {
                                        $objClsUsuarioEntidad->setearDireccion($_POST['txtDireccion']);
                                        if (isset($_POST['txtClave'])) {
                                            $objClsUsuarioEntidad->setearPassUsuario($_POST['txtClave']);
                                            if (isset($_POST['txtClave'])) {
                                                $objClsUsuarioEntidad->setearPassUsuario($_POST['txtClave']);
                                                if (isset($_POST['cmbPerfil'])) {
                                            $objClsUsuarioEntidad->setearPerfilUsuario($_POST['cmbPerfil']);
                                            $objClsUsuarioEntidad->setearPerfilUsuario;;
                                            return $objClsUsuarioEntidad;
                                        }else
                                        {
                                            EnviarMensajeError();
                                        }
                                            }else
                                            {
                                                EnviarMensajeError();
                                            }
                                        }else
                                        {
                                            EnviarMensajeError();
                                        }
                                    }else
                                    {
                                        EnviarMensajeError();
                                    }
                                }else
                                {
                                    EnviarMensajeError();
                                }
                            }else
                            {
                                EnviarMensajeError();
                            }
                        }else
                        {
                            EnviarMensajeError();
                        }
                    }else
                    {
                        EnviarMensajeError();
                    }
                }else
                {
                    EnviarMensajeError();
                }
            }else
            {
                EnviarMensajeError();
            }
        }else
        {
            EnviarMensajeError();
        }
    }else
    {
        EnviarMensajeError();
    }
}
