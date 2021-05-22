<?php 
class clConfigEntidad
{ 
    private $Usuario, $Servidor, $BaseDatos, $Clave;
     public function setearServidor($valor) 
    { 
        if(is_null($valor) || !isset($valor) || (strlen($valor) <=0))
         {
              $this->Servidor =null;
    } else
    {
    $this->Servidor =trim($valor);
    }
    }
    public function setearBaseDatos($valor)
    {
    if(is_null($valor) || !isset($valor) || (strlen($valor) <=0))
     { 
         $this->BaseDatos = null;
        } else
        {
        $this->BaseDatos =trim($valor);
        }

    }
    public function setearUsuario($valor)
    {
        if(is_null($valor) || !isset($valor) || (strlen($valor) <=0)) 
        {
             $this->Usuario =null;
            }
            else
            {
            $this->Usuario =trim($valor);
            }
    }

    public function setearClave($valor)
    {
            if(is_null($valor) || !isset($valor) || (strlen($valor) <=0)) 
            {
                 $this->Clave =null;
                }else
                { 
                    $this->Clave =trim($valor);
                }
    }

    public function obtenerServidor()
    {
        return $this->Servidor;
    }
    public function obtenerBaseDatos()
    {
        return $this->BaseDatos;
    }
    public function obtenerUsuario()
    {
            return $this->Usuario;
    }
    public function obtenerClave()
    {
        return $this->Clave;
    }
    public function obtenerDatosCargados()
    {
        $datosCargados=array();
        if(!is_null($this->Servidor))
            $datosCargados [] = "Sevidor";
        if(!is_null($this->BaseDatos))
        $datosCargados [] = "DB";    
        if(!is_null($this->Usuario))
        $datosCargados [] = "Usuario";
        if(!is_null($this->Clave))
        $datosCargados [] = "Clave";    
    }
    public function decriptServidor
    ($valor)
    {
        $this->Servidor = $this->objClsEncript->desencriptar(trim($valor));
    }
    public function decriptDB
    ($valor)
    {
        $this->DB = $this->objClsEncript->desencriptar(trim($valor));
    }
    public function decriptUsuario
    ($valor)
    {
        $this->Usuario = $this->objClsEncript->desencriptar(trim($valor));
    }
    public function decriptClave
    ($valor)
    {
        $this->Clave = $this->objClsEncript->desencriptar(trim($valor));
    }
    

}


?>