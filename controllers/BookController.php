<?php
require_once __DIR__."/../modelos/Libro.php";
class BookController {

    private $libro;

    public function __construct(){
        $this -> libro = new Libro(); 
    }

    public function index(){
        $libros = $this -> libro -> all();  // obten el return de la funcion "all" y guarda en $libros
        include __DIR__."/../views/usuarios/index.php"; // muestra los $libros con esta carpeta
    }

    public function find($id_libro){
        $libro = $this -> libro -> find($id_libro);
        include __DIR__ ."/../views/usuarios/editar.php";
    }

    public function update($id_libro,$nombre,$genero,$fecha_publicada,$autor){
        $userUpdate = $this -> libro -> update($id_libro,$nombre,$genero,$fecha_publicada,$autor);
        header('Location: index.php');
    } 

    public function delete($id_libro){
        $userDelete = $this -> libro -> delete($id_libro);
        header('Location: index.php');
    }

    public function create(){
        include __DIR__."/../views/usuarios/create.php";
    }

    public function store($book){
        $userCreate = $this -> libro -> store($book);
        header('Location: index.php');
    }
}

?>
