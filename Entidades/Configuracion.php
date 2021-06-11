<?php 
include_once('../DataAccess/Encript.php');
class clConfigEntidad
{ 
    private $Usuario, $Servidor, $BaseDatos, $Clave,$ValoresCargados, $objClsEncript;
    public function __construct()
    {
        $this->objClsEncript=new clsEncript();
    }
     public function setearServidor($valor) 
    { 
        if(is_null($valor) || !isset($valor) || (strlen($valor) <=0))
         {
              $this->Servidor =null;
    } else  {
    $this->Servidor =$this->objClsEncript->encriptar(trim($valor));
    }
    }
    public function setearBaseDatos($valor)
    {
    if(is_null($valor) || !isset($valor) || (strlen($valor) <=0))
     { 
         $this->BaseDatos = null;
        } else
        {
        $this->BaseDatos =$this->objClsEncript->encriptar(trim($valor));
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
            $this->Usuario =$this->objClsEncript->encriptar(trim($valor));
            }
    }

    public function setearClave($valor)
    {
            if(is_null($valor) || !isset($valor) || (strlen($valor) <=0)) 
            {
                 $this->Clave =null;
                }else
                { 
                    $this->Clave =$this->objClsEncript->encriptar(trim($valor));
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
        $this->ValoresCargados=array();
        if(!is_null($this->Servidor))
        {
            $datosCargados [] = "Servidor";
            $this->ValoresCargados[]=$this->Servidor;
        }
        if(!is_null($this->BaseDatos))
        {
        $datosCargados [] = "DB";
        $this->ValoresCargados[]=$this->BaseDatos;
        }    
        if(!is_null($this->Usuario))
        {
        $datosCargados [] = "Usuario";
        $this->ValoresCargados[]=$this->Usuario;
        }
        if(!is_null($this->Clave))
        {
        $datosCargados [] = "Clave";
        $this->ValoresCargados[]=$this->Clave;  
        }
        return $datosCargados; 
    }
    public function obtenerValorCargado($indice)
    {
        return $this->ValoresCargados[$indice];
    }
    
    public function decriptServidor
    ($valor)
    {
        $this->Servidor = $this->objClsEncript->desencriptar(trim($valor));
    }
    public function decriptDB
    ($valor)
    {
        $this->BaseDatos = $this->objClsEncript->desencriptar(trim($valor));
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