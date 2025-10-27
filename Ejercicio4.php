<?php
class Vehiculo {
    private $marca; private $velocidad;
    private $velocidadMaxima; private $velocidadMinima = 0;
    public function __construct($marca, $velocidadMaxima = 120) {
        $this->marca = $marca; $this->velocidad = 0;
        $this->velocidadMaxima = $velocidadMaxima;
    }
    public function acelerar($aumento) {
        $this->velocidad += $aumento;
        if ($this->velocidad > $this->velocidadMaxima) {
            $this->velocidad = $this->velocidadMaxima;
        }
    }
    public function frenar($reduccion) {
        $this->velocidad -= $reduccion;
        if ($this->velocidad < $this->velocidadMinima) {
            $this->velocidad = $this->velocidadMinima;
        }
    }
}
?>