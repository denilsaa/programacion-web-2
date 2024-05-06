<?php
// Establecer conexión con la base de datos
$con = mysqli_connect("localhost", "root", "", "universidad");
mysqli_set_charset($con, "utf8");

if ($con->connect_error) {
    die("Error al conectarse a la BBDD: " . $con->connect_error);
}
?>
