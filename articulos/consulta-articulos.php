<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actividad 4</title>
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<header>
		<section>
			<a href="../index.html"><h2>ET3: Actividad 4</h2></a>
		</section>
		<nav>
			<button>
				<p>Menú</p>
			</button>
			<div class="dropdown">
                <a href="#"><h3>Artículos</h3></a>
                    <section>
                        <a href="../articulos/consulta-articulos.php"><h3>Consultar</h3></a>
						<a href="../articulos/inserta-articulos.html"><h3>Insertar</h3></a>
						<a href="../articulos/actualiza-articulos.html"><h3>Actualizar</h3></a>
						<a href="../articulos/borra-articulos.html"><h3>Borrar</h3></a>
                    </section>
                <a href="#"><h3>Proveedores</h3></a>
                    <section>
                        <a href="../proveedores/consulta-proveedores.php"><h3>Consultar</h3></a>
						<a href="../proveedores/inserta-proveedores.html"><h3>Insertar</h3></a>
						<a href="../proveedores/actualiza-proveedores.html"><h3>Actualizar</h3></a>
						<a href="../proveedores/borra-proveedores.html"><h3>Borrar</h3></a>
                    </section>
                <a href="#"><h3>Ventas</h3></a>
                    <section>
                        <a href="../ventas/consulta-ventas.php"><h3>Consultar</h3></a>
						<a href="../ventas/inserta-ventas.html"><h3>Insertar</h3></a>
						<a href="../ventas/actualiza-ventas.html"><h3>Actualizar</h3></a>
						<a href="../ventas/borra-ventas.html"><h3>Borrar</h3></a>
                    </section>
            </div>
		</nav>
	</header>
	<main>
		<a href='consulta-articulos.php'>Actualizar tabla...</a>
		<h1>Consulta de la tabla de articulos </h1>
		<main class="grid grid-5">
			<section>Clave</section>     
			<section>Descripcion</section>
			<section>Cantidad</section>
			<section>Precio</section>
			<section>Observaciones</section>
			<?php
				$con = mysqli_connect("localhost", "root", "");
				if (!$con) {
					die('No se estableció la conexión con el servidor:' . mysqli_error($con));
				}
				mysqli_select_db($con, "Ferreteria");
				$resultado = mysqli_query($con, "SELECT * FROM ARTICULOS");
				if ($resultado === FALSE) {
					print "fallo ";
					die(mysqli_error($con)); //Muestra el error que ocurrio
				}
				while ($row = mysqli_fetch_array($resultado)) {
					print "<section>$row[CLAVE_ART]</section>";
					print "<section>$row[DESC_ART]</section>";
					print "<section>$row[CANTIDAD_ART]</section>";
					print "<section>$row[PRECIO_ART]</section>";
					print "<section>$row[OBS_ART]</section>";
				}
				print "</main>";
				$registros = mysqli_num_rows($resultado);
				print "<p>El numero de registros son: $registros</p>";
				mysqli_close($con);
			?>
		<a href='inserta-articulos.html'>
			<button>
				Insertar un dato
			</button>
		</a>
		<a href='actualiza-articulos.html'>
			<button>
				Modifica un dato
			</button>
		</a>
		<a href='borra-articulos.html'>
			<button>
				Borrar un dato
			</button>
		</a>
	</main>
	<footer>
		<section class="footer-1">
			UA: Programación IV
		</section>
		<section class="footer-2">
			Etapa: 3
		</section>
		<section class="footer-1">
			Nombre: Héctor Mauricio Flores Martínez (1897759)
		</section>
		<section class="footer-2">
			Fecha: 11/05/2020
		</section>
	</footer>
</body>

</html>