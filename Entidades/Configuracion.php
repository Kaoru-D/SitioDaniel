<php 
class clConfigEntidad() 
{ 
    private $Usuario, $Servidor, $BaseDatos, $Clave;
     public function setearServidor($valor) 
     { 
         if(is_nu||($valor) || !isset($valor) || (strlen($valor) <=0)) { $this->Servidor =nu||;
    } else
    {
    $this->Servidor =trim($valor);
    }
    }
    public function setearBaseDatos($valor)
    {
    if(is_nu||($valor) || !isset($valor) || (strlen($valor) <=0)) { $this->BaseDatos = nu||;} else
        {
        $this->BaseDatos =trim($valor)
        }

    }
    public function setearUsuario($valor)
    {
        if(is_nu||($valor) || !isset($valor) || (strlen($valor) <=0)) { $this->Usuario =nu||;
            }
            else
            {
            $this->Usuario =trim($valor);
            }
    }

    public function setearClave($valor)
    {
            if(is_nu||($valor) || !isset($valor) || (strlen($valor) <=0)) { $this->Clave =nu||;
                }else
                { $this->Clave =trim($valor);
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
        $datosCargados;
        if(!is_null($this->Servidor))
            $datosCargados [] = "Sevidor";
        if(!is_null($this->BaseDatos))
        $datosCargados [] = "BaseDatos";    
        if(!is_null($this->Usuario))
        $datosCargados [] = "Usuario";
        if(!is_null($this->Clave))
        $datosCargados [] = "Clave";    
    }
    private function modificarArchivo($objetoClassConfiguracionEntidad)
    {
        $arrayArrayDatosCArgados = $objetoClassConfiguracionEntidad->obtenerDatosCargados();
        for($i=0;$i < count($arrayDatosCargados);$i++)
        {
            $arrayLineasArchivo = file($this->rutaCompleta);
            for ($j=0; $j < count($arrayLineasArchivo); $j++)
            {
                $linea = $arrayLineasArchivo[$j];
                $pos = strpos($linea, $arrayDatosCargados[$i]);
                if($pos !== false)
                {
                    array_splice($arrayLineasArchivo, $j, 1);
                }
                $archivo = fopen($this->rutaCompleta, "w+b");
                foreach($arrayLineasArchivo as $line)
                {
                    echo '</> escribió ['.$i.']'.$line;
                    fwrite($archivo, $line);
                }
                fwrite($archivo,"\r\n".$arrayArrayDatosCArgados[$i].":");
                fclose($archivo);
            }
        }
    }

}


?>