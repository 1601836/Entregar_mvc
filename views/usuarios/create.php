
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        body{
            display: grid;
            place-items: center;
            width: 100%;
            height: 100dvh;
            background-color: whitesmoke;
        }
        h1{
            text-transform: uppercase;
            font-family: sans-serif;
            font-weight: 700;
            color: blue;
            z-index: 10;
            background-color: red;
            padding: 2rem 389px;
            margin: auto;
        }
        form{
            padding-top: 2rem;
            width: 1000px;
            margin-top: -350px;
            background-color: aqua;
            display: block;
        }
        .mb-3{
            max-width: 500px;
            height: 500px;
            margin: auto;
            padding: 2rem;
            text-transform: uppercase;          
        }
        label{
            color: white;
            font-weight: 900;
            font-family: sans-serif;
            margin: .5rem 0;
            display: flex;
            justify-content:  center;
        }
        input{           
            display: block;
            height: 2rem;
            margin: .5rem;
            width: 20rem;
            margin: auto;
        }
        button{
            margin: 1.5rem 35% ;
            width: 30%;
            height: 3rem;
            background-color: cornflowerblue;
            font-weight: 800;
            color: white;
        }
        button:hover{
            background-color: red;
            color: black;
        }
    </style>
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