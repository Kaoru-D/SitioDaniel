<?php
include_once('adminBD.php');
class clsConsultas
{
    private $objConexion;
    public function __construct()
    {
        $this->objConexion = new clsAdminBD;
    }
    public function actualizarEliminarInsertar($sql)
    {
        $conexion = $this->objConexion->conectar();
        $retorno = false;
        if ($conexion->query($sql)) {
            $retorno = true;
        } else {
            echo $conexion->error;
        }
        $this->objConexion->desconectar($conexion);
        return $retorno;
    }
    public function ObtenerConexion()
    {
        return $this->objConexion;
    }
    public function CargarDatos($sql)
    {
        $conexion = $this->objConexion->conectar();
        $result = $conexion->query($sql);
        $filas = mysqli_num_rows($result);
        if ($filas > 0) {
            $resultado = mysqli_fetch_array($result);
        } else {
            $resultado = false;
        }
        $this->objConexion->desconectar($conexion);
        return $resultado;
    }
    public function resultadolista($result)
    {
        $filas = mysqli_num_rows($result);
        $resultado = null;
        $i = 0;
        while ($fila = mysqli_fetch_array($result)) {
            $resultado[$i] = $filas;
            $i++;
        }
        return $resultado;
    }
    public function listados($sql)
    {
        $conexion = $this->objConexion->conectar();
        $result = $conexion->query($sql);
        $filas = mysqli_num_rows($result);
        if ($filas > 0) {
            $listado = $this->resultadolista($result);
        } else {
            $listado = false;
        }
        $this->objConexion->desconectar($conexion);
        return $listado;
    }
}
