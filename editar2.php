<?php
include("conexion.php");

// Asegúrate de que las claves están definidas antes de asignarlas
$id = isset($_POST["id"]) ? $_POST["id"] : null;
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : '';
$appat = isset($_POST["ap_pat"]) ? $_POST["ap_pat"] : '';
$apmat = isset($_POST["ap_mat"]) ? $_POST["ap_mat"] : '';
$direccion = isset($_POST["direccion"]) ? $_POST["direccion"] : '';
$mail = isset($_POST["mail"]) ? $_POST["mail"] : '';
$telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : '';
$estado = isset($_POST["estado"]) ? $_POST["estado"] : '';
$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : '';
$clave = isset($_POST["clave"]) ? $_POST["clave"] : '';

if (is_null($id)) {
    echo "<script>alert('ID del usuario no definido.'); window.history.go(-1);</script>";
    exit();
}

$editar = "UPDATE usuario SET
    nombre = '$nombre',
    ap_pat = '$appat',
    ap_mat = '$apmat',
    direccion = '$direccion',
    mail = '$mail',
    telefono = '$telefono',
    estado = '$estado',
    usuario = '$usuario',
    clave = '$clave'
WHERE id = '$id';";

// Corregir variable incorrecta ($editars -> $editar)
$resultado = mysqli_query($con, $editar);

if ($resultado) {
    echo "<script>alert('El usuario se actualizó correctamente.'); window.location = 'listar.php';</script>";
} else {
    echo "<script>alert('Error al actualizar el usuario.'); window.history.go(-1);</script>";
}
?>
