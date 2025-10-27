<?php
class Producto {
    public $nombre;
    public $precio;
    public $stock;
    public function __construct($nombre, $precio, $stock) {
        $this->nombre = $nombre; $this->precio = $precio; $this->stock = $stock;
    }
    public function aplicarDescuento($porcentaje) {
        if ($porcentaje > 0 && $porcentaje <= 100) {
            $descuento = $this->precio * ($porcentaje / 100);
            $this->precio -= $descuento;
        }
    }
}
?>