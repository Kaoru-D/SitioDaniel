<?php
include_once('../Entidades/tercero.php');
include_once('../DataAccess/tercerosData.php');
if (isset($_POST['txtOperacion'])) {
    $operacion = $_POST['txtOperacion'];
    if ($operacion === "Registrar") {
        $objClsUsuarioData = new clsUsuariosData();
        if ($objClsUsuarioData->registrarUsuario(ObtenerDatosFormulario())) {
            $mensaje = "Operación ejecutada correctamente";
            header('Location:../pages/Home/?MsgType=Ext&MsgValue' . urldecode($mensaje));
        } else {
            EnviarMensajeError();
        };
    }
} else {
    EnviarMensajeError();
}
function EnviarMensajeError()
{
    $mensaje = "Ocurrió un error en la operación ...</br>Intenta nuevamente";
    //header('Location:../pages/Home/?MsgType=Err&MsgValue='.urlencode($mensaje));
}
function ObtenerDatosFormulario()
{
    $objClsUsuarioEntidad = new clsUsuarioEntidad();
    if (isset($_GET['Op'])) {
        $opcion = $_GET['Op'];
        if ($opcion === "RClient") {
            $objClsUsuarioEntidad->setearesCliente(1);
        } elseif ($opcion === "RProvider") {
            $objClsUsuarioEntidad->setearesProveedor(1);
        }
    }
    if (isset($_POST['txtIdentificacionT'])) {
        $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtIdentificacionT']);
        if (isset($_POST['txtFullNombre'])) {
            $objClsUsuarioEntidad->setearPrimerNombre($_POST['txtFullNombre']);
            if (isset($_POST['txtEmailTerc'])) {
                $objClsUsuarioEntidad->setearSegunNombre($_POST['txtEmailTerc']);
                if (isset($_POST['txtCelular'])) {
                    $objClsUsuarioEntidad->setearPrimerApellido($_POST['txtCelular']);
                    if (isset($_POST['txtTelefono'])) {
                        $objClsUsuarioEntidad->setearSegundoApellido($_POST['txtTelefono']);
                        if (isset($_POST['txtDireccion'])) {
                            $objClsUsuarioEntidad->setearEmail($_POST['txtDireccion']);
                            if (isset($_POST['txtDescripcion'])) {
                                $objClsUsuarioEntidad->setearIdentificacion($_POST['txtDescripcion']);
                                if (isset($_POST['txtContacto'])) {
                                    $objClsUsuarioEntidad->setearPerfilUsuario($_POST['txtContacto']);
                                    return $objClsUsuarioEntidad;
                                } else {
                                    EnviarMensajeError();
                                }
                            } else {
                                EnviarMensajeError();
                            }
                        } else {
                            EnviarMensajeError();
                        }
                    } else {
                        EnviarMensajeError();
                    }
                } else {
                    EnviarMensajeError();
                }
            } else {
                EnviarMensajeError();
            }
        } else {
            EnviarMensajeError();
        }
    } else {
        EnviarMensajeError();
    }
}
