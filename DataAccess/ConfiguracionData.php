<?php
include_once('../Entidades/Configuracion.php');
class clsConfiguracion

{
    private $nombre = null, $ruta = null, $rutaCompleta = null;
    public function __construct()
    {
        $this->ruta = '../DataAccess/';
        $this->nombre = 'config.txt';
        $this->generarRutaCompleta();
    }
    private function generarRutaCompleta()
    {
        $this->rutaCompleta = $this->ruta . $this->nombre;
    }
    private function actualizarArchivo($objetoClassConfiguracionEntidad)
    {
        if ($this->validarExistenciaArchivo($objetoClassConfiguracionEntidad)) {
            $this->modificarArchivo($objetoClassConfiguracionEntidad);
        } else {
            $this->LeerConfiguracion($objetoClassConfiguracionEntidad);
        }
    }
    private function validarExistenciaArchivo($objetoClassConfiguracionEntidad)
    {
        if (file_exists($this->rutaCompleta)) {
            echo "El archivo " . $this->nombre . " existe en la ruta: " . $this->ruta;
            return true;
            $this->modificarArchivo($objetoClassConfiguracionEntidad);
        } else {
            echo "El archivo " . $this->nombre . " no existe en la ruta: " . $this->ruta;
            return false;
            $this->crearArchivo($objetoClassConfiguracionEntidad);
        }
    }

    private function crearArchivo($objetoClassConfiguracionEntidad)
    {
        $archivo = fopen($this->rutaCompleta, "w+b");
        if ($archivo === false) {
            echo '</br>Error al intentar crear el archivo';
        } else {
            echo 'Se creó el archivo correctamente';
            fwrite($archivo, "Servidor: " . $objetoClassConfiguracionEntidad->obtenerServidor() . "\r\n");
            fwrite($archivo, "DB: " . $objetoClassConfiguracionEntidad->obtenerBaseDatos() . "\r\n");
            fwrite($archivo, "Usuario: " . $objetoClassConfiguracionEntidad->obtenerUsuario() . "\r\n");
            fwrite($archivo, "Clave: " . $objetoClassConfiguracionEntidad->obtenerClave());
        }
        fclose($archivo);
    }
    public function modificarArchivo($objetoClassConfiguracionEntidad)
    {
        $arrayDatosCArgados = $objetoClassConfiguracionEntidad->obtenerDatosCargados();
        for ($i = 0; $i < count($arrayDatosCArgados); $i++) {
            $arrayLineasArchivo = file($this->rutaCompleta);
            for ($j = 0; $j < count($arrayLineasArchivo); $j++) {
                $linea = $arrayLineasArchivo[$j];
                $pos = strpos($linea, $arrayDatosCArgados[$i]);
                if ($pos !== false) {
                    array_splice($arrayLineasArchivo, $j, 1);
                }
                $archivo = fopen($this->rutaCompleta, "w+b");
                foreach ($arrayLineasArchivo as $line) {
                    echo '</> escribió [' . $i . ']' . $line;
                    fwrite($archivo, $line);
                }
                fwrite($archivo, "\r\n" . $arrayDatosCArgados[$i] . ":");
                fclose($archivo);
            }
        }
    }
    public function LeerConfiguracion()
    {
        $objClasConfiguracionEntidad = new clConfigEntidad();
        $arrayLineasArchivo = file($this->rutaCompleta);
        for ($j = 0; $j < count($arrayLineasArchivo); $j++) {
            $linea = $arrayLineasArchivo[$j];
            $pos = strpos($linea, "Servidor");
            if ($pos !== false) {

                $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                if (count($caracteres) >= 2) {
                    $objClasConfiguracionEntidad->decriptServidor($caracteres[1]);
                }
            } else {
                $pos = strpos($linea, "DB");
                if ($pos !== false) {
                    $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                    if (count($caracteres) >= 2) {
                        $objClasConfiguracionEntidad->decriptDB($caracteres[1]);
                    }
                } else {
                    $pos = strpos($linea, "Usuario");
                    if ($pos !== false) {
                        $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                        if (count($caracteres) >= 2) {
                            $objClasConfiguracionEntidad->decriptUsuario($caracteres[1]);
                        }
                    } else {
                        $pos = strpos($linea, "Clave");
                        if ($pos !== false) {
                            $caracteres = preg_split('/:/', $linea, -1, PREG_SPLIT_NO_EMPTY);
                            if (count($caracteres) >= 2) {
                                $objClasConfiguracionEntidad->decriptClave($caracteres[1]);
                            }
                        }
                    }
                }
            }

            
        }return $objClasConfiguracionEntidad;
    }
}
