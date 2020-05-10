<?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "Ferreteria");  
    if(isset($_POST['clave'])) {
        $CLAVE=$_POST['clave'];
        $resultado = mysqli_query($con, "SELECT * FROM PROVEEDORES WHERE CLAVE_PROV = $CLAVE");
        if($resultado === FALSE) { 
            echo "fallo ";
            die(mysqli_error($con));
        }
        while($row=mysqlI_fetch_array($resultado))
            {
                $clave = $row['CLAVE_PROV'];
                $nombre = $row['NOMBRE_PROV'];
                $dir = $row['DIRECCION_PROV'];
                $tel = $row['TELEFONO_PROV'];
                $email = $row['EMAIL_PROV'];
                $tipo = $row['TIPO_PROV'];
                $claveart = $row['CLAVEART_PROV'];
            }
    }
    mysqli_close($con);
?>
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
    <form action="" method="POST">
        <main>
            <h3>Actualiza Proveedores</h3>
            <label for="clave">Clave:</label>
            <input type="number" name="clave" id="clave" placeholder="Auto-Incrementable">
        </main>
        <main>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Inserta el Nombre" required>
        </main>
        <main>
            <label for="dir">Dirección:</label>
            <input type="text" name="dir" id="dir" placeholder="Inserta la Dirección" required>
        </main>
        <main>
            <label for="tel">Teléfono:</label>
            <input type="number" name="tel" id="tel" placeholder="Inserta el Teléfono" required>
        </main>
        <main>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" placeholder="Inserta el Email" required>
        </main>
        <main>
            <label for="tipo">Tipo:</label>
            <input type="number" name="tipo" id="tipo" placeholder="Inserta el Tipo" required>
        </main>
        <main>
            <label for="claveart">ClaveArt:</label>
            <input type="number" name="claveart" id="claveart" placeholder="Inserta la ClaveArt" required>
        </main>
        <button type="submit" name="ok">
            Enviar
        </button>
    </form>
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
    <script>
        const CLAVE = <?php echo $clave; ?>;
        const NOMBRE = "<?php echo $nombre; ?>";
        const DIR = "<?php echo $dir; ?>";
        const TEL = <?php echo $tel; ?>;
        const EMAIL = "<?php echo $email; ?>";
        const TIPO = <?php echo $tipo; ?>;
        const CLAVEART = <?php echo $claveart; ?>;

        const clave = document.getElementById('clave');
        clave.setAttribute('value', CLAVE);

        const nombre = document.getElementById('nombre');
        nombre.setAttribute('value', NOMBRE);

        const dir = document.getElementById('dir');
        dir.setAttribute('value', DIR);

        const tel = document.getElementById('tel');
        tel.setAttribute('value', TEL);

        const email = document.getElementById('email');
        email.setAttribute('value', EMAIL);

        const tipo = document.getElementById('tipo');
        tipo.setAttribute('value', TIPO);

        const claveart = document.getElementById('claveart');
        claveart.setAttribute('value', CLAVEART);
    </script>
</body>
</html>
<?php
    if(isset($_POST['ok'])) {
        $con = mysqli_connect("localhost","root","");
        mysqli_select_db($con, "Ferreteria"); 

        //$CLAVE=$_POST['clave'];
        $NOMBRE = $_POST['nombre'];
        $DIR = $_POST['dir'];
        $TEL = $_POST['tel'];
        $EMAIL = $_POST['email'];
        $TIPO = $_POST['tipo'];
        $CLAVEART = $_POST['claveart'];

        mysqli_query($con, "UPDATE PROVEEDORES SET NOMBRE_PROV ='$NOMBRE', DIRECCION_PROV ='$DIR', TELEFONO_PROV ='$TEL', EMAIL_PROV ='$EMAIL', TIPO_PROV = '$TIPO', CLAVEART_PROV = '$CLAVEART' 
        WHERE CLAVE_PROV ='$CLAVE'");
        mysqli_close($con);
        echo "<script>window.location='consulta-proveedores.php'</script>";
    }
?>