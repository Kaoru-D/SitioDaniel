<?php
include_once('../Entidades/Configuracion.php');
include_once('../DataAccess/ConfiguracionData.php');
if(!isset($_POST['txtDireccionDB']))
{
    echo 'No Se recuperó el Servidor<br />';
}
if(!isset($_POST['txtNombreDB']))
{
    echo 'No Se recuperó la base de datos<br />';
}
if(!isset($_POST['txtUsuario']))
{
    echo 'No Se recuperó el Usuario<br />';
}
if(!isset($_POST['PsContrasenia']))
{
    echo 'No Se recuperó el password<br />';
}

$objClasConfiguracionEntidad = new clConfigEntidad();
$objClasConfiguracionEntidad->setearServidor($_POST['txtDireccionDB']);
$objClasConfiguracionEntidad->setearBaseDatos($_POST['txtNombreDB']);
$objClasConfiguracionEntidad->setearUsuario($_POST['txtUsuario']);
$objClasConfiguracionEntidad->setearClave($_POST['PsContrasenia']);

$objClsConfiguracion = new clsConfiguracion();
$objClsConfiguracion->actualizarArchivo($objClasConfiguracionEntidad);
?>