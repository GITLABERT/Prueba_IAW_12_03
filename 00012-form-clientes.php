<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del cliente</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
    <body>
        <div class="container mt-5">
        <h1>Panadería Gilabert</h1>
        <h3>Introduzca los datos necesarios para la identificación del usuario</h3>
        <form action= "00012-insert.php" method = "post">
        <div class="form-group">
                <label for="nombre">Nombre del cliente</label>
                <input type ="text" class="form-control" id="nombre" placeholder="Introduzca el nombre de la persona que realiza el pedido"/>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección de envío</label>
                <input type ="text" class="form-control" id="direccion" placeholder="Introduzca la dirección donde desea recibir el pedido"/>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type ="text" class="form-control" id="email" placeholder="Introduzca la dirección de correo para recibir la factura online"/>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type ="text" class="form-control" id="telefono" placeholder="Introduzca un teléfono de contacto"/>
            </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
            <button type ="reset" class="btn btn-primary">Restablecer página</button>
        </form>
        </div>
    </body>
</html>
