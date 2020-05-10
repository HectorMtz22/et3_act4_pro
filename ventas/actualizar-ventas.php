<?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "Ferreteria");  
    if(isset($_POST['clave'])) {
        $CLAVE=$_POST['clave'];
        $resultado = mysqli_query($con, "SELECT * FROM VENTAS WHERE CLAVE_VTA = $CLAVE");
        if($resultado === FALSE) { 
            echo "fallo ";
            die(mysqli_error($con));
        }
        while($row=mysqlI_fetch_array($resultado))
            {
                $clave = $row['CLAVE_VTA'];
                $cant = $row['CANTIDAD_VTA'];
                $precio = $row['PRECIO_VTA'];
                $total = $row['TOTAL_VTA'];
                $nventa = $row['NVENTA_VTA'];
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
            <h3>Actualiza Ventas</h3>
            <label for="clave">Clave:</label>
            <input type="number" name="clave" id="clave" placeholder="Auto-Incrementable">
        </main>
        <main>
            <label for="cant">Cantidad:</label>
            <input type="text" name="cant" id="cant" placeholder="Inserta tu Cantidad" required>
        </main>
        <main>
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="Inserta tu Precio" required>
        </main>
        <main>
            <label for="total">Total:</label>
            <input type="number" name="total" id="total" placeholder="Inserta el Total" required>
        </main>
        <main>
            <label for="nventa">Nventa:</label>
            <input type="text" name="nventa" id="nventa" placeholder="Inserta tus Nventa" required>
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
        const CLAVE = "<?php echo $clave; ?>";
        const CANT = "<?php echo $cant; ?>";
        const PRECIO = "<?php echo $precio; ?>";
        const TOTAL = "<?php echo $total; ?>";
        const NVENTA = "<?php echo $nventa; ?>";

        const clave = document.getElementById('clave');
        clave.setAttribute('value', CLAVE);

        const cant = document.getElementById('cant');
        cant.setAttribute('value', CANT);

        const precio = document.getElementById('precio');
        precio.setAttribute('value', PRECIO);

        const total = document.getElementById('total');
        total.setAttribute('value', TOTAL);

        const nventa = document.getElementById('nventa');
        nventa.setAttribute('value', NVENTA);
    </script>
</body>
</html>
<?php
    if(isset($_POST['ok'])) {
        $con = mysqli_connect("localhost","root","");
        mysqli_select_db($con, "Ferreteria"); 

        //$CLAVE=$_POST['clave'];
        $CANT=$_POST['cant'];
        $PRECIO=$_POST['precio'];
        $TOTAL=$_POST['total'];
        $NVENTA=$_POST['nventa'];

        mysqli_query($con, "UPDATE VENTAS SET CANTIDAD_VTA ='$CANT', PRECIO_VTA ='$PRECIO', TOTAL_VTA ='$TOTAL', NVENTA_VTA = '$NVENTA'
        WHERE CLAVE_VTA ='$CLAVE'");
        mysqli_close($con);
        echo "<script>window.location='consulta-ventas.php'</script>";
    }
?>