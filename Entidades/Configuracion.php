<php class clConfigEntidad() { private $Usuario, $Servidor, $BaseDatos, $Clave; public function setearServidor($valor) { if(is_nu||($valor) || !isset($valor) || (strlen($valor) <=0)) { $this->Servidor =nu||;
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

                public function obtenerServidor(){
                    return $this->Servidor;
                }
                public function obtenerBaseDatos(){
                    return $this->BaseDatos;
                }
                public function obtenerUsuario(){
                    return $this->Usuario;
                }
                public function obtenerClave(){
                    return $this->Clave;
                }

                }


                ?>