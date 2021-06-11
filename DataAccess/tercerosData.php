<?php
include_once('../DataAccess/consultas.php');
class clsUsuariosData
{
    private $objConsultas;
    public function __construct()
    {
        $this->objConsultas=new clsConsultas();
    }
    public function registrarUsuario($datos)
    {
        //$conexion=$this->objConsultas->ObtenerConexion();
        echo $datos->obtenerPerfilUsuario();
        $sql ="INSERT INTO terceros(idTerceros, nombreTercero, emailTercero, celularTercero, telefonoTercero, direccionTercero, descripcionTercero, contactoTercero, estadoTercero, esCliente, esProveedor, terceroCreacion, fechaProductoCreacion, terceroModificacion, fechaTerceroModificacion)  VALUES 
        ('".$datos->obteneridTerceros()."','".$datos->obtenernombreTercero()."','".$datos->obteneremailTercero()."',
        '".$datos->obtenercelularTercero()."','".$datos->obtenerestadoTercero()."','".$datos->obteneresCliente()."',
        '".$datos->obteneresProveedor()."','".$datos->obtenerterceroCreacion()."', NOW())";
        return $this->objConsultas->actualizarEliminarInsertar($sql);
    }
}
?>