<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body{
            width: 100%;
            height: 100dvh;
            background-color: whitesmoke;
            display: grid;
            place-items: center;
            padding: 100px;
        }
        h1{
            text-transform: uppercase;
            color: blue;
        }
        body > a{
            background-color: red;
            width: 100px;
            height: 40px;
            display: grid;
            place-items: center;
            border: 5px solid black;
            color: white;
            font-weight: 500;
        }
        table{
            width: 60%;
            text-decoration: none;
            text-align: center;
        }
        .Encabezado {
            background-color: brown;
            height: 50px;
            color: white;
            font-weight: 900;
            text-transform: uppercase;
        }
        tr > td:hover{
            background-color: aqua;
        }

    </style>
</head>
<body>
    <h1>Lista de libros</h1>
    <a href="index.php?action=create">New User</a>
    <table class="table" border="1">  
        <tr class="Encabezado">               
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
                            <a href=index.php?action=eliminar&id_libro=$libro[id_libro]&nombre=$libro[nombre]&genero=$libro[genero]&fecha_publicada=$libro[fecha_publicada]&autor=$libro[autor]>Eliminar</a>
                        </td>
                </tr>";

            }
        ?>
    </table>
</body>
</html>