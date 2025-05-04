<?php
require_once __DIR__."/../config/Database.php";
class Libro{
    private $conexion;

    public function __construct(){
        $this -> conexion = Database::conectar();
    }
    public function all(){
        $stmt = $this -> conexion -> query("select * from Libro");
        $libros = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        return $libros;
    }
}

?>
