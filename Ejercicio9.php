<?php
class Biblioteca {
    private $libros = [];
    public function agregarLibro($titulo, $autor) {
        $this->libros[] = ['titulo' => $titulo, 'autor' => $autor];
    }
    public function buscarPorTitulo($tituloBuscado) {
        foreach ($this->libros as $libro) {
            if (strcasecmp($libro['titulo'], $tituloBuscado) == 0) {
                return $libro;
            }
        }
        return null;
    }
}
?>
