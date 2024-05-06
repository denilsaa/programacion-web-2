<?php
include("conexion.php");
$nombre = $_POST["nombre"];
$ap_pat = $_POST["ap_pat"];
$ap_mat = $_POST["ap_mat"];
$direccion = $_POST["direccion"];
$mail = $_POST["mail"];
$telefono = $_POST["telefono"];  // Corregir el nombre de la columna
$estado = $_POST["estado"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
// Consulta de inserción
$insertar = "INSERT INTO usuario (nombre, ap_pat, ap_mat, direccion, mail, telefono, estado, usuario, clave)
             VALUES ('$nombre', '$ap_pat', '$ap_mat', '$direccion', '$mail', '$telefono', '$estado', '$usuario', '$clave')";
// Ejecutar la consulta
$resultado = mysqli_query($con, $insertar);
if ($resultado) {
    echo "<script>alert('El usuario se registró correctamente!'); window.location = 'listar.php';</script>";
} else {
    echo "<script>alert('Error al registrar Usuario...'); window.history.go(-1);</script>";
}

?>