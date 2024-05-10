<?php
include("conexion.php");
$id=$_GET["id"];
$eliminar="DELETE FROM usuario WHERE id='$id'";
$resultado=mysqli_query($con,$eliminar);
if ($resultado) {
    echo "<script>alert('El usuario se elimino correctamente!'); window.location = 'listar.php';</script>";
} else {
    echo "<script>alert('Error al eliminar el usuario.....'); window.history.go(-1);</script>";
}
?>