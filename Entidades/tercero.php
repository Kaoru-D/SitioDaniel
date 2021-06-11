<?php
class clsUsuarioEntidad
{
    private $idTerceros, $nombreTercero, $emailTercero, $celularTercero, $telefonoTercero, $direccionTercero, $descripcionTercero, $contactoTercero,$esCliente, $esProveedor, $PassUsuario, $estadoTercero, $terceroCreacion,$fechaProductoCreacion, $terceroModificacion, $fechaTerceroModificacion;
    public function setearidTerceros($value)
    {
        $this->idTerceros= trim($value);
    }
    public function setearnombreTercero($value)
    {
        $this->nombreTercero= trim($value);
    }
    public function setearemailTercero($value)
    {
        $this->emailTercero= trim($value);
    }
    public function setearcelularTercero($value)
    {
        $this->celularTercero= trim($value);
    }
    public function seteartelefonoTercero($value)
    {
        $this->telefonoTercero= trim($value);
    }
    public function seteardireccionTercero($value)
    {
        $this->direccionTercero= trim($value);
    }
    public function seteardescripcionTercero($value)
    {
        $this->descripcionTercero= trim($value);
    }
    public function setearcontactoTercero($value)
    {
        $this->contactoTercero= trim($value);
    }
    public function setearesCliente($value)
    {
        $this->esCliente= trim($value);
    }
    public function setearesProveedor($value)
    {
        $this->esProveedor= trim($value);
    }
        public function setearestadoTercero($value)
    {
        
        $this->estadoTercero= trim($value);
        
    }
    public function setearterceroCreacion($value)
    {
        if (is_null($value)||!isset($value)||(strlen($value))<=0) {
            $this->terceroCreacion="system";
        }else
        {
        $this->terceroCreacion= trim($value);
        }
    }
    
    public function setearfechaProductoCreacion($value)
    {
        $this->fechaProductoCreacion= trim($value);
    }
    public function setearterceroModificacion($value)
    {
        $this->terceroModificacion= trim($value);
    }
    public function setearfechaTerceroModificacion($value)
    {
        $this->fechaTerceroModificacion= trim($value);
    }
    public function obteneridTerceros()
    {
        return $this->idTerceros;
    }
    public function obtenernombreTercero()
    {
        return $this->nombreTercero;
    }
    public function obteneremailTercero()
    {
        return $this->emailTercero;
    }
    public function obtenercelularTercero()
    {
        return $this->celularTercero;
    }
    public function obtenertelefonoTercero()
    {
        return $this->telefonoTercero;
    }
    public function obtenerdireccionTercero()
    {
        return $this->direccionTercero;
    }
    public function obtenerdescripcionTercero()
    {
        return $this->descripcionTercero;
    }
    public function obteneresCliente()
    {
        return $this->esCliente;
    }
    public function obtenercontactoTercero()
    {
        return $this->contactoTercero;
    }
    public function obteneresProveedor()
    {
        return $this->esProveedor;
    }
    public function obtenerestadoTercero()
    {
        return $this->estadoTercero;
    }
    public function obtenerterceroCreacion()
    {
        if (is_null($this->terceroCreacion)||!isset($this->terceroCreacion)||(strlen($this->terceroCreacion))<=0) {
            return"system";
        }else
        {
        return $this->terceroCreacion;
        }
    }
    public function obtenerfechaProductoCreacion()
    {
        return $this->fechaProductoCreacion;
    }
    public function obtenerterceroModificacion()
    {
        return $this->terceroModificacion;
    }
    public function obtenerfechaTerceroModificacion()
    {
        return $this->fechaTerceroModificacion;
    }
}
?>