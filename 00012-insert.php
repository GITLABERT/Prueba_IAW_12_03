<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<?php
			// Reunimos todas las variables empleadas entre todos los formularios anteriores

			$pan = $_POST['pan'];
			$cantidad = $_POST['cantidad'];
			$nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
			$email = $_POST['email'];
			$telefono = $_POST['telefono'];
			$pres_pan = $_POST['seleccionar'];
			$pres_nombre = $_POST['seleccionar2'];
	
			// Conexión a nuestra base de datos
			$host = "localhost";
			$user = "phpmyadmin";
			$pass = "root";
			$database = "panaderia";

            $con = new mysqli($host, $user, $pass, $database);

			//Seleccionamos la base de datos que pone nombre a esta práctica: "Panadería"
			mysqli_select_db($con, "panaderia");

			//Verificación del formulario de panes

			if ($pan) {
				$insert_pan = "INSERT INTO panes 
				(nombre, cantidad)
				VALUES('$pan', $cantidad);";

				if ($result = mysqli_query($con, $insert_pan)) {
				echo "<h3 class='center'>Pan " . $pan ." agregado correctamente."."<br/>"."</h3>";
						
				} else {
				echo ("No ha sido posible agregar el producto -> ". mysqli_error($con))."<br/>"."<br/>";
				}
			}

			// Formulario de clientes
			if ($nombre) {
				$insert_cli = "INSERT INTO clientes 
				(nombre, direccion,  email, telefono)
				VALUES('$nombre', '$direccion', '$email', $telefono);";

				if ($result = mysqli_query($con, $insert_cli)) {
				echo "<h3 class='center'>Cliente " . $nombre ." agregado correctamente."."<br/>"."</h3>";
						
				} else {
				echo ("No ha sido posible registrar el cliente -> ". mysqli_error($con))."<br/>"."<br/>";
				}
			}

			//Verificación de pedidos

			if ($pres_pan) {
				//Consultas para obtener id de pan y de clientes
				$consultapan = "SELECT id FROM panes WHERE nombre = '$pres_pan'";
				$consultacli = "SELECT id FROM clientes WHERE nombre = '$pres_nombre'";

				$panes = mysqli_query($con, $consultapan);
				if (!$panes) {
					die("Error al ejecutar la consulta de panes: " . mysqli_error($con));
				}
				while ($id_pan = mysqli_fetch_row($libros)) {
					$pan_id = $id_pan[0];
				}

				$clientes = mysqli_query($con, $consultaclientes);
				if (!$clientes) {
					die("Error al ejecutar la consulta de clientes: " . mysqli_error($con));
				}
				while ($id_clientes = mysqli_fetch_row($usuarios)) {
					$clientes_id = $id_clientes[0];
				}
				
			
				//Insertamos en la base de datos
				$insert_ped = "INSERT INTO pedidos 
								(id_pan, id_clientes)
								VALUES($pan_id, $clientes_id);";

				// Último proceso; verificación
                
				if ($result = mysqli_query($con, $insert_pres)) {
					echo "<h3 class='center'>Pedido de " . $pres_pan ." insertado correctamente."."<br/>"."</h3>";
							
				} else {
					echo ("No ha sido posible registrar el pedido -> ". mysqli_error($con))."<br/>"."<br/>";
				}
			}

		?>
	</body>
</html>
