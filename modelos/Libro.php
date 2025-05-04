<?php
require_once __DIR__."/../config/Database.php";
class Libro{
    private $conexion;

    public function __construct(){
        $this -> conexion = Database::conectar(); //  conecta  ala base de datos
    }
    public function all(){
        $stmt = $this -> conexion -> query("select * from Libro"); // genera una consulta
        $libros = $stmt -> fetchAll(PDO::FETCH_ASSOC);  // extrae toda la informacion y guarda en $libros
        return $libros;  // dale el valor a quien llame esta funcion
    }

    public function find($id_libro){
        $stmt = $this->conexion->query("SELECT * FROM libro WHERE id_libro = $id_libro");
        $libro = $stmt->fetch(PDO::FETCH_ASSOC);
        return $libro;
    }

    public function update($id_libro,$nombre, $genero, $fecha_publicada, $autor) {
        $stmt = $this->conexion->prepare("UPDATE libro SET nombre=?, genero=?,fecha_publicada=?,autor=? WHERE id_libro=?");
        return $stmt->execute([$nombre, $genero, $fecha_publicada, $autor, $id_libro]);
    }

    public function delete($id_libro){
        $stmt = $this->conexion->prepare("delete from libro where id_libro=?");
        return $stmt -> execute([$id_libro]); 
    } 
    public function store($book){
        $query = "insert into libro(id_libro,nombre,genero,fecha_publicada,autor) values(?,?,?,?,?)";
        $stmt = $this -> conexion -> prepare($query);
        return $stmt -> execute([$book['id_libro'],$book['nombre'],$book['genero'],$book['fecha_publicada'],$book['autor']]);
    }
}

?>
