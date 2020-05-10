<?php

$con = mysqli_connect("localhost","root","");                                    
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con, "Ferreteria");
if(is_numeric($_POST['clave'])){
    $sql="INSERT INTO PROVEEDORES (CLAVE_PROV, NOMBRE_PROV, DIRECCION_PROV, TELEFONO_PROV, EMAIL_PROV, TIPO_PROV, CLAVEART_PROV)
         VALUES   ('$_POST[clave]','$_POST[nombre]','$_POST[dir]', '$_POST[tel]', '$_POST[email]', '$_POST[tipo]', '$_POST[claveart]')";
}
else {
    $sql="INSERT INTO PROVEEDORES (NOMBRE_PROV, DIRECCION_PROV, TELEFONO_PROV, EMAIL_PROV, TIPO_PROV, CLAVEART_PROV)
         VALUES   ('$_POST[nombre]','$_POST[dir]', '$_POST[tel]', '$_POST[email]', '$_POST[tipo]', '$_POST[claveart]')";
}

if(!mysqli_query($con, $sql)) {
    print "<a href='inserta-proveedores.html'>Regresar</a>";
    print "<a href='consulta-proveedores.php'>Ver registros</a>";
    die('Error: ' . mysqli_error($con));
}
header('Location: consulta-proveedores.php');
print "1 registro agregado";

print "<a href='consulta-proveedores.php'> Ver registros</a>";
mysqli_close($con);
?>