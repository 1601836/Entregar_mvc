<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de libros</h1>
    <a href="index.php?action=create">New User</a>
    <table class="table" border="1">  
        <tr>               
            <td>id_libro</td>
            <td>nombre</td>
            <td>genero</td>
            <td>fecha_publicada</td>
            <td>autor</td>
            <td>action</td>
        </tr>

        <?php
            foreach($libros as $libro){ 
                echo "<tr>
                        <td>$libro[id_libro]</td>
                        <td>$libro[nombre]</td>
                        <td>$libro[genero]</td>
                        <td>$libro[fecha_publicada]</td>
                        <td>$libro[autor]</td>
                        <td>
                            <a href=index.php?action=editar&id_libro=$libro[id_libro]&nombre=$libro[nombre]&genero=$libro[genero]&fecha_publicada=$libro[fecha_publicada]&autor=$libro[autor]>Editar</a>
                            <a href='index.php?action=eliminar&id_libro=$libro[id_libro]&nombre=$libro[nombre]&genero=$libro[genero]&fecha_publicada=$libro[fecha_publicada]&autor=$libro[autor]'>Eliminar</a>
                        </td>
                </tr>";

            }
        ?>
    </table>
</body>
</html>