
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Nuevo libro</h1>
    <form action="index.php?action=store" method="POST">
    <div class="mb-3">

        <label for="" class="form-label">id_libro</label>
        <input type="text" name="id_libro">

        <label for="" class="form-label">nombre</label> 
        <input type="text" name="nombre"> 

        <label for="" class="form-label">genero</label> 
        <input type="text" class="form-control" name="genero"> 

        <label for="" class="form-label">fecha_publicada</label> 
        <input type="date" class="form-control" name="fecha_publicada"> 

        <label for="" class="form-label">autor</label> 
        <input type="text" class="form-control" name="autor"> 

    </div>
    <button type="submit">Agregar</button>
</form>
</body>
</html>