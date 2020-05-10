<?php

$con = mysqli_connect("localhost","root","");                                    
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con, "Ferreteria");
if(is_numeric($_POST['clave'])) {
    $sql="INSERT INTO VENTAS (CLAVE_VTA, CANTIDAD_VTA, PRECIO_VTA, TOTAL_VTA, NVENTA_VTA)
        VALUES   ('$_POST[clave]','$_POST[cant]','$_POST[precio]', '$_POST[total]', '$_POST[nventa]')";
}
else {
    $sql="INSERT INTO VENTAS (CANTIDAD_VTA, PRECIO_VTA, TOTAL_VTA, NVENTA_VTA)
        VALUES   ('$_POST[cant]','$_POST[precio]', '$_POST[total]', '$_POST[nventa]')";
}

if(!mysqli_query($con, $sql)) {
    print "<a href='inserta-ventas.html'>Regresar</a>";
    print "<a href='consulta-ventas.php'>Ver registros</a>";
    die('Error: ' . mysqli_error($con));
}
header('Location: consulta-ventas.php');
print "1 registro agregado";

print "<a href='consulta-ventas.php'> Ver registros</a>";
mysqli_close($con);
?>