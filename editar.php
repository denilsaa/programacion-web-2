<?php 
    include("conexion.php");
    $id = $_GET["id"];
    $usuario = "SELECT * FROM usuario WHERE id='$id'";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <style>
           <style>
        /* Estilos globales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border: 1px sólido #ddd;
            borde-radio: 10px;
        }

        input, select {
            padding: 10px;
            border: 1px sólido #ccc;
            borde-radio: 5px;
            width: 100%;
            margen-abajo: 15px;
        }

        select {
            fondo: #fff;
            cursor: puntero;
        }

        .botones {
            text-align: center;
        }

        .botones input {
            padding: 10px 20px;
            borde: ninguno;
            borde-radio: 5px;
            background-color: #007bff;
            color: blanco;
            cursor: puntero;
            transición: fondo 0.3s;
        }

        .botones input:hover {
            fondo: #0056b3;
        }
    </style>
    </style>
</head>
<body>
    <form action="editar2.php" method="post">
        <h1>EDITAR USUARIO</h1><br>
        <?php 
            $resultado = mysqli_query($con, $usuario);
            while ($fila = mysqli_fetch_assoc($resultado)) {
        ?>
        <input type="hidden" value="<?php echo $fila["id"]; ?>" name="id">        
        <input type="text" value="<?php echo $fila["nombre"]; ?>" name="nombre" placeholder="Ingresa su nombre..." required>
        <input type="text" value="<?php echo $fila["ap_pat"]; ?>" name="ap_pat" placeholder="Ingrese su apellido paterno" required>
        <input type="text" value="<?php echo $fila["ap_mat"]; ?>" name="ap_mat" placeholder="Ingrese su apellido materno" required>
        <input type="text" value="<?php echo $fila["direccion"]; ?>" name="direccion" placeholder="Ingrese su dirección" required>
        <input type="email" value="<?php echo $fila["mail"]; ?>" name="mail" placeholder="Ingrese su email" required>
        <input type="number" value="<?php echo $fila["telefono"]; ?>" name="telefono" placeholder="Ingrese su teléfono" required>

        <select name="estado">
            <option selected disabled>
                <?php echo ($fila["estado"] == 1) ? "ACTIVO" : "INACTIVO"; ?>
            </option>
            <?php
                $estado = "SELECT * FROM estado";
                $resultado_est = mysqli_query($con, $estado);
                while ($fila_est = mysqli_fetch_assoc($resultado_est)) {
            ?>
            <option value="<?php echo $fila_est["id"]; ?>"><?php echo $fila_est["tipo"]; ?></option>
            <?php
                } // Cierre del segundo bucle while
            ?>
        </select>

        <input type="text" value="<?php echo $fila["usuario"]; ?>" name="usuario" placeholder="Ingrese su usuario" required>
        <input type="password" value="<?php echo $fila["clave"]; ?>" name="clave" placeholder="Ingrese su contraseña" required>

        <div class="botones">
            <input type="submit" value="Actualizar">
            <input type="button" value="Regresar" onclick="top.location='listar.php'">
        </div> 

        <?php 
            } // Cierre del primer bucle while
            mysqli_free_result($resultado);
        ?>
    </form>
</body>
</html>