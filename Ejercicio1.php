<?php
class Alumno {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function mostrarDatos() {
        echo "Nombre: " . $this->nombre . ", Edad: " . $this->edad . "<br>";
    }

    public function actualizarEdad($nuevaEdad) {
        if ($nuevaEdad > 0) {
            $this->edad = $nuevaEdad;
        }
    }
}
?>