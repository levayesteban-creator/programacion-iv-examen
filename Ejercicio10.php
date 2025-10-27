<?php
class Usuario {
    private $nombreUsuario; private $contrasena;
    public function __construct($nombreUsuario, $contrasena) {
        $this->nombreUsuario = $nombreUsuario;
        // OJO: En la vida real, nunca debemos de guardar contraseñas así.
        // Se usa password_hash()
        $this->contrasena = $contrasena;
    }
    public function verificarContrasena($intento) {
        // En la vida real se usa password_verify()
        return $this->contrasena === $intento;
    }
}
?>
