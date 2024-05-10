<?php 
    include("conexion.php");
    $id=$_GET["id"];
    $usuario = "SELECT * FROM usuario where id='$id'";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Usuario</title>
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
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            margin-bottom: 15px;
        }

        input[readonly] {
            background-color: #f5f5f5;
            color: #666;
        }

        .botones {
            text-align: center;
        }

        .botones input {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .botones input:hover {
            background-color: #0056b3;
        }
    </style>
    </style>
</head>
<body>
    <form  method="post">
        <h1>DATOS DE USUARIO</h1><br>
        <?php 
            $resulatado=mysqli_query($con, $usuario);
            while($fila=mysqli_fetch_assoc($resulatado) ){            
        ?>
        <input type="text" value="<?php echo $fila["nombre"] ?>" name="nombre" placeholder="Ingresa su nombre..." readonly>
        <input type="text" value="<?php echo $fila["ap_pat"] ?>" name="ap_pat" placeholder="Ingrese su apellido paterno" readonly>
        <input type="text" value="<?php echo $fila["ap_mat"] ?>" name="ap_mat" placeholder="Ingrese su apellido materno" readonly>
        <input type="text" value="<?php echo $fila["direccion"] ?>" name="direccion" placeholder="Ingrese su dirección" readonly>
        <input type="email" value="<?php echo $fila["mail"] ?>" name="mail" placeholder="Ingrese su email" readonly>
        <input type="number" value="<?php echo $fila["telefono"] ?>" name="telefono" placeholder="Ingrese su teléfono" readonly>
        <input type="text" value="<?php echo $fila["estado"] ?>" name="estado" value="A" readonly>
        <input type="text" value="<?php echo $fila["usuario"] ?>" name="usuario" placeholder="Ingrese su usuario" readonly>
        <input type="password" value="<?php echo $fila["clave"] ?>" name="clave" placeholder="Ingrese su contraseña" readonly>
        <div class="botones">
            <input class="a" type="button" value="Regresar" onclick="top.location='listar.php'">
        </div>
        <?php 
            }
            mysqli_free_result($resulatado);

        ?>

       
    </form>
</body>
</html>