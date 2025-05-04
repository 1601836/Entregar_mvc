
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar</h1>

    <form action="index.php?action=update&id_libro=<?php echo $_GET['id_libro']; ?>" method="POST">
        <div class="mb-3">

            <label for="" class="form-label">id_libro</label>
            <input type="hidden" name="id_libro" value="<?php echo $_GET['id_libro']; ?>">

            <label for="" class="form-label">nombre</label>
            <input type="text" class="form-control" name="nombre"  value=<?php echo $libro['nombre'];?> >

            <label for="" class="form-label">genero</label>
            <input type="text" class="form-control" name="genero"  value=<?php echo $libro['genero'];?> >

            <label for="" class="form-label">fecha_publicada</label>
            <input type="text" class="form-control" name="fecha_publicada"  value=<?php echo $libro['fecha_publicada'];?> >

            <label for="" class="form-label">autor</label>
            <input type="text" class="form-control" name="autor" value=<?php echo $libro['autor'];?> >

        </div>
        <button type="submit">Editar</button>
    </form>
</body>
</html>