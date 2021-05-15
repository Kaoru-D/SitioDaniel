<php class clsConfiguracion 
{ private $nombre=null, $ruta=null, $rutaCompleta =null; public function __construct() 
{ 
    $this->ruta ='../DataAccess/';
    $this->nombre = 'config.txt';
    $this->generarRutaCompleta();
    }
    private function generarRutaCompleta()
    {
        $this->rutaCompleta = $this->ruta.$this->nombre;
    }
    private function actualizarArchivo($objetoClassConfiguracionEntidad)
    {
        if($this->validarExistenciaArchivo())
        {
            
        }else{

        }
    }
    private function validarExistenciaArchivo($objetoClassConfiguracionEntidad)
    {
        if(file_exists($this->rutaCompleta))
        {
            echo"El archivo ".$this->nombre." existe en la ruta: ".$this->ruta;
            return true;
            $this->modificarArchivo($objetoClassConfiguracionEntidad);
        }else
        {
            echo"El archivo ".$this->nombre." no existe en la ruta: ".$this->ruta;
            return false;
            $this->crearArchivo($objetoClassConfiguracionEntidad);
        }
    }

    private function crearArchivo($objetoClassConfiguracionEntidad)
    {
        $archivo =fopen($this->rutaCompleta, "w+b");
        if($archivo=== false)
        {
            echo '</br>Error al intentar crear el archivo';
        }else
        {
            echo'Se creó el archivo correctamente';
            fwrite($archivo,"Servidor: ".$objetoClassConfiguracionEntidad->obtenerServidor()."\r\n");
            fwrite($archivo,"Base de Datos: ".$objetoClassConfiguracionEntidad->obtenerBaseDatos()."\r\n");
            fwrite($archivo,"Usuario: ".$objetoClassConfiguracionEntidad->obtenerUsuario()."\r\n");
            fwrite($archivo,"Clave: ".$objetoClassConfiguracionEntidad->obtenerClave());
            
        }
        fclose($archivo);
    }

    private function functionactualizarData($objetoClassConfiguracionEntidad)
    {
        
    }
    }

    ?>