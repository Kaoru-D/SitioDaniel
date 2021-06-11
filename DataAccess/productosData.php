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
        $sql ="INSERT INTO productos(codigoProducto, NombreProducto, DescripcionProducto, UnidadMedida, marcaProducto, precioActual, cantidadActual, productoCreacion, fechaProductoCreacion, productoModificacion, fechaProductoModificacion) VALUES 
        ('".$datos->obtenercodigoProducto()."','".$datos->obtenerNombreProducto()."','".$datos->obtenerDescripcionProducto()."',
        '".$datos->obtenerUnidadMedida()."','".$datos->obtenermarcaProducto()."','".$datos->obtenerprecioActual()."',
        '".$datos->obtenercantidadActual()."','".$datos->obtenerproductoCreacion()."', NOW())";
        return $this->objConsultas->actualizarEliminarInsertar($sql);
    }
}
?>