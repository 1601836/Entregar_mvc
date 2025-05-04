
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <style>

*{
    margin: 0;
    padding: 0;
    text-decoration: none;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
body{
    display: grid;
    place-items: center;
    height: 100dvh;
    background-color: whitesmoke;
}
form{
    width: 500px;
    height: 400px;
    background-color: blue;
    display:grid;
    padding: 2rem;
    margin: auto;
}
label{
    display: flex;
    flex-direction: column;
    color: white;
    font-weight: 400;
    text-transform: uppercase;
    margin-top: 10px;
}
input{
    display: flex;
    flex-direction: column;
    width: 250px;
    height: 1.5rem;
    margin: auto;
    text-align: center;
    position: absolute;
    margin-left: 200px;
}
button{
    width: 80%;
    margin: auto;
    height: 30px;
    margin-top: 3rem;
    background-color: wheat;
}
</style>
</head>
<body>
<h1>Dato a Eliminar</h1>

<form action="index.php?action=eliminar&id_libro=<?php echo $_GET['id_libro']; ?>" method="POST">
    <div class="mb-3">

        <label for="" class="form-label">id_libro
        <input type="text" name="id_libro" value="<?php echo $_GET['id_libro']; ?>"></label>

        <label for="" class="form-label">nombre
        <input type="text" name="nombre" value="<?php echo $libro['nombre']; ?>"></label>   

        <label for="" class="form-label">genero
        <input type="text" class="form-control" name="genero"  value=<?php echo $libro['genero'];?> ></label>   

        <label for="" class="form-label">fecha_publicada
        <input type="date" class="form-control" name="fecha_publicada" value="<?php echo $libro['fecha_publicada']; ?>"> </label>

        <label for="" class="form-label">autor
        <input type="text" class="form-control" name="autor" value=<?php echo $libro['autor'];?> ></label>   

    </div>
    <button type="submit">Eliminar</button>
</form>
</body>
</html>