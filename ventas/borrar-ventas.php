<?php
$con = mysqli_connect("localhost","root","");                    
if (!$con)     
  {
  die('No se estableció la conexión: ' . mysqli_error($con));
  }
else
{
  print("<h1> Conexion exitosa!!!</h1>");
  }
mysqli_select_db($con, "Ferreteria");
$clave=$_POST['clave'];
 $sql=mysqli_query($con, "DELETE FROM VENTAS WHERE CLAVE_VTA = $clave");
if(!$sql){
  print "fallo "; 
    die(mysqli_error($con));
 }
print "Registro borrado";
header('Location: consulta-ventas.php');
print "<a href='borra-ventas.html'>Regresar</a>";
mysqli_close($con);
?>