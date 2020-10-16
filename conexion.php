<?php
//datos para crear la conexion
$servername ="localhost";
$database = "asistencia";
$username = "root";
$password = "";
//variable que guarda la conexion
$conn = mysqli_connect($servername,$username, $password, $database);

if (!$conn){
  die("No hay conexion".mysqli_connect_error());
}
echo "se conecto apropiadamente";
mysqli_close($conn);

 ?>
