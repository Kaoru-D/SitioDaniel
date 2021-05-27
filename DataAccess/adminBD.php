<?php
include_once('ConfiguracionData.php');
class clsAdminBD
{
    private $conexion=null;
    public function __construct()
    {
        
        if (!defined('DB_SERVER')) {
            $objConfiguracionData = new clsConfiguracion;
            $datosConexion =$objConfiguracionData->LeerConfiguracion();
            define('DB_SERVER',$datosConexion->obtenerServidor());
            define('DB_NAME',$datosConexion->obtenerBaseDatos());
            define('DB_USER',$datosConexion->obtenerUsuario());
            define('DB_PASS',$datosConexion->obtenerClave());
        }
    }
    public function conectar()
    {
        $conexion = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        if ($conexion->connect_errno) {
            die('Error de conexión: '. $conexion->connect_errno);
        }
        return $conexion;

    }

}
