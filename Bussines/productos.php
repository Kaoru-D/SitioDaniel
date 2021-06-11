<?php
include_once('../Entidades/productos.php');
include_once('../DataAccess/productosData.php');
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
    if (isset($_POST['txtCodigo'])) {
        $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtCodigo']);
        if (isset($_POST['txtNombreProducto'])) {
            $objClsUsuarioEntidad->setearPrimerNombre($_POST['txtNombreProducto']);
            if (isset($_POST['txtDescripcionProducto'])) {
                $objClsUsuarioEntidad->setearSegunNombre($_POST['txtDescripcionProducto']);
                if (isset($_POST['txtUnidadMedida'])) {
                    $objClsUsuarioEntidad->setearPrimerApellido($_POST['txtUnidadMedida']);
                    if (isset($_POST['txtMarcaProducto'])) {
                        $objClsUsuarioEntidad->setearSegundoApellido($_POST['txtMarcaProducto']);
                        if (isset($_POST['txtPrecioActual'])) {
                            $objClsUsuarioEntidad->setearEmail($_POST['txtPrecioActual']);
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
}
