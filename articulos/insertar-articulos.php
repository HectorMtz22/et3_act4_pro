<?php

$con = mysqli_connect("localhost","root","");                                    
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con, "Ferreteria");
if(is_numeric($_POST['clave'])){
    $sql="INSERT INTO ARTICULOS (CLAVE_ART , DESC_ART, CANTIDAD_ART, PRECIO_ART, OBS_ART)
         VALUES   ('$_POST[clave]','$_POST[desc]','$_POST[cant]', '$_POST[precio]', '$_POST[obs]')";
}
else {
    $sql="INSERT INTO ARTICULOS (DESC_ART, CANTIDAD_ART, PRECIO_ART, OBS_ART)
         VALUES   ('$_POST[desc]','$_POST[cant]', '$_POST[precio]', '$_POST[obs]')";
}

if(!mysqli_query($con, $sql)) {
    print "<a href='inserta-articulos.html'>Regresar</a>";
    print "<a href='consulta-articulos.php'>Ver registros</a>";
    die('Error: ' . mysqli_error($con));
}
header('Location: consulta-articulos.php');
print "1 registro agregado";

print "<a href='consulta-articulos.php'> Ver registros</a>";
mysqli_close($con);
?>