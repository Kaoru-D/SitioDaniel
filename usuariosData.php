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
        $sql ="INSERT INTO usuarios(nombreUsuario, primerNombre, segundoNombre, primerApellido, segundoApellido, email, 
        Cedula, celular, direccion, perfilUsuario, Clave, estadoUsuario, usuarioCreacion, fechaUsuarioCreacion) VALUES 
        ('".$datos->obtenerNombreUsuario()."','".$datos->obtenerPrimerNombre()."','".$datos->obtenerSegundoNombre()."',
        '".$datos->obtenerPrimerApellido()."','".$datos->obtenerSegundoApellido()."','".$datos->obtenerEmail()."',
        '".$datos->obtenerIdentificacion()."','".$datos->obtenerCelular()."','".$datos->obtenerDireccion()."',
        ".$datos->obtenerPerfilUsuario().",'".$datos->obtenerPassUsuario()."', 1 ,
        '".$datos->obtenerUsuarioCreacion()."', NOW())";
        return $this->objConsultas->actualizarEliminarInsertar($sql);
    }
    public function listarUsuarios()
    {
        $sql="SELECT nombreUsuario,Cedula, concat( primerNombre,' ', segundoNombre,' ', primerApellido,' ', segundoApellido), email,  celular, direccion, perfilUsuario,  EstadoUsuario  FROM usuarios";
        return $this->objConsultas->listados($sql);
    }
    public function autenticarUsuario($datos)
    {
        $sql="SELECT perfilUsuario,primerNombre FROM usuarios WHERE nombreUsuario='".$datos->obtenerNombreUsuario()."'ANDClave='".$datos->obtenerPassUsuario()."'";
        return $this->objConsultas->CargarDatos($sql);
    }
}
?>