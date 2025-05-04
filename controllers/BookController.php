<?php
require_once __DIR__."/../modelos/Libro.php";
class BookController {

    private $libro;

    public function __construct(){
        $this -> libro = new Libro(); 
    }

    public function index(){
        $libros = $this -> libro -> all();
        include __DIR__."/../views/usuarios/index.php";
    }
}

?>
