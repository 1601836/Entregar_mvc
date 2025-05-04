<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        require_once __DIR__."/./controllers/BookController.php";
    
        $libro = new BookController();

        $action = $_GET['action'] ?? "index";
        $id_libro = $_GET['id_libro'] ?? null;

        switch($action){
            case "index":
                $libro -> index();
                break;
            case "editar":
                $libro->find($id_libro);
                break;
            case "update":
                $id_libro = $_GET['id_libro'];
                $nombre = $_POST['nombre'];
                $genero = $_POST['genero'];
                $fecha_publicada = $_POST['fecha_publicada'];
                $autor = $_POST['autor'];
                $libro->update($id_libro,$nombre,$genero,$fecha_publicada,$autor);
                break;
            case "eliminar":
                $libro -> delete($id_libro);
                break;
        }

    ?>

</body>
</html>