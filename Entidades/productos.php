<?php
class clsUsuarioEntidad
{
    private $codigoProducto, $NombreProducto, $DescripcionProducto, $UnidadMedida, $marcaProducto, $precioActual, $cantidadActual, $productoCreacion,$fechaProductoCreacion, $productoModificacion, $fechaProductoModificacion;
    public function setearcodigoProducto($value)
    {
        $this->codigoProducto= trim($value);
    }
    public function setearNombreProducto($value)
    {
        $this->NombreProducto= trim($value);
    }
    public function setearDescripcionProducto($value)
    {
        $this->DescripcionProducto= trim($value);
    }
    public function setearUnidadMedida($value)
    {
        $this->UnidadMedida= trim($value);
    }
    public function setearmarcaProducto($value)
    {
        $this->marcaProducto= trim($value);
    }
    public function setearprecioActual($value)
    {
        $this->precioActual= trim($value);
    }
    public function setearcantidadActual($value)
    {
        $this->cantidadActual= trim($value);
    }
    public function setearproductoCreacion($value)
    {
        if (is_null($value)||!isset($value)||(strlen($value))<=0) {
            $this->productoCreacion="system";
        }else
        {
        $this->productoCreacion= trim($value);
        }
    }
    
    public function setearfechaProductoCreacion($value)
    {
        $this->fechaProductoCreacion= trim($value);
    }
    public function setearproductoModificacion($value)
    {
        $this->productoModificacion= trim($value);
    }
    public function setearfechaProductoModificacion($value)
    {
        $this->fechaProductoModificacion= trim($value);
    }
    public function obtenercodigoProducto()
    {
        return $this->codigoProducto;
    }
    public function obtenerNombreProducto()
    {
        return $this->NombreProducto;
    }
    public function obtenerDescripcionProducto()
    {
        return $this->DescripcionProducto;
    }
    public function obtenerUnidadMedida()
    {
        return $this->UnidadMedida;
    }
    public function obtenermarcaProducto()
    {
        return $this->marcaProducto;
    }
    public function obtenerprecioActual()
    {
        return $this->precioActual;
    }
    public function obtenercantidadActual()
    {
        return $this->cantidadActual;
    }
    public function obtenerproductoCreacion()
    {
        if (is_null($this->productoCreacion)||!isset($this->productoCreacion)||(strlen($this->productoCreacion))<=0) {
            return"system";
        }else
        {
        return $this->productoCreacion;
        }
    }
    public function obtenerfechaProductoCreacion()
    {
        return $this->fechaProductoCreacion;
    }
    public function obtenerproductoModificacion()
    {
        return $this->productoModificacion;
    }
    public function obtenerfechaProductoModificacion()
    {
        return $this->fechaProductoModificacion;
    }



}
?>