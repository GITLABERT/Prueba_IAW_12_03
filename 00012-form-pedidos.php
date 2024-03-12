<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del pedido</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
    <body>
        <div class="container mt-5">
        <h1>Panadería Gilabert</h1>  <br>
        <h2>¿Cuál es su pedido?</h2>
        
        <form action= "00012-insert.php" method = "post">

        <div class="form-group">
                <label for="nombre">Nombre del cliente</label>
                <input type ="text" class="form-control" id="nombre"/>
            </div>

            <div class="form-group">
                <label for="direccion">¿A qué dirección quiere que le enviemos el pedido?</label>
                <input type ="text" class="form-control" id="direccion" />
        </div>
            <div class="form-group">
                <?php
                
                    $host = "localhost";
                    $user = "phpmyadmin";
                    $pass = "root";
                    $database = "panaderia";
            
                    //Conectando 
                    $con = new mysqli($host, $user, $pass, $database);
                    //Selecciono la base de datos
                    mysqli_select_db($con, "panaderia");
                    //Creo la sentencia
                    $consultar="SELECT nombre FROM panes";
                    //Ejecuto la sentencia
                    $registros=mysqli_query($con,$consultar);	
                    echo "<label for='seleccionar'>¿Qué pan desea pedir?</label>";
                    echo "<select name='seleccionar' id='seleccionar' class='form-control'>";
                    while($registro=mysqli_fetch_row($registros)){
                        
                        echo "<option value='$registro[0]'>".$registro[0] ."</option>";
                        
                    }
                    echo "</select>";
                ?>
            </div>
          
            <div class="form-group">
                <label for="cantidad">¿Qué cantidad necesita?</label>
                <input type ="number" class="form-control" id="cantidad" />
            </div>
            <button type="submit" class="btn btn-primary">Confirmar pedido</button>
            <button type ="reset" class="btn btn-primary">Restablecer página</button>
        </form>
        </div>
    </body>
</html>
