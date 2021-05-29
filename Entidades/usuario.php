<?php
include_once('../DataAccess/Encript.php');
class clsUsuarioEntidad
{
    private $NombreUsuario, $PrimerNombre, $SegunNombre, $PrimerApellido, $SegundoApellido, $Email, $Identificacion, $Direccion,$Celular, $PerfilUsuario, $PassUsuario, $EstadoUsuario, $UsuarioCreacion,$FechaCreacion, $UsuarioModificacion, $FechaModificacion, $objClsEncript;
    public function __construct()
    {
        $this->objClsEncript= new clsEncript();
    }
    public function setearNombreUsuario($value)
    {
        $this->NombreUsuario= trim($value);
    }
    public function setearPrimerNombre($value)
    {
        $this->PrimerNombre= trim($value);
    }
    public function setearSegunNombre($value)
    {
        $this->SegunNombre= trim($value);
    }
    public function setearPrimerApellido($value)
    {
        $this->PrimerApellido= trim($value);
    }
    public function setearSegundoApellido($value)
    {
        $this->SegundoApellido= trim($value);
    }
    public function setearEmail($value)
    {
        $this->Email= trim($value);
    }
    public function setearIdentificacion($value)
    {
        $this->Identificacion= trim($value);
    }
    public function setearDireccion($value)
    {
        $this->Direccion= trim($value);
    }
    public function setearCelular($value)
    {
        $this->Celular= trim($value);
    }
    public function setearPerfilUsuario($value)
    {
        $this->PerfilUsuario= trim($value);
    }
    public function setearPassUsuario($value)
    {
        if (is_null($value) || !isset($value) || (strlen($value)<=0)) {
            $this->PassUsuario="";
        }else
        {
            $this->PassUsuario= $this->objClsEncript->encriptar(trim($value));
        }
        
    }
    public function setearEstadoUsuario($value)
    {
        $this->EstadoUsuario= trim($value);
    }
    public function setearUsuarioCreacion($value)
    {
        $this->UsuarioCreacion= trim($value);
    }
    public function setearFechaCreacion($value)
    {
        $this->FechaCreacion= trim($value);
    }
    public function setearUsuarioModificacion($value)
    {
        $this->UsuarioModificacion= trim($value);
    }
    public function setearFechaModificacion($value)
    {
        $this->FechaModificacion= trim($value);
    }
}
?>