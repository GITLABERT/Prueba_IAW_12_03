<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos de los panes de la panadería Gilabert</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
        <h1>Panadería Gilabert</h1>
        <h1>Introduzca los datos de los panes </h1>

        <form action= "00012-insert.php" method = "post">
            <div class="form-group">
                <label for="titulo">Nombre:</label>
                <input type ="text" class="form-control" id="pan" placeholder="Introduzca un tipo de pan"/>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type ="text" class="form-control" id="cantidad" placeholder="Introduzca la cantidad"/>
            </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
            <button type ="reset" class="btn btn-primary">Restablecer página</button>
        </form>
    </body>
</html>
