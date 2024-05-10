<?php
    include("conexion.php");
    $usuarios=" SELECT * FROM `usuario`";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            <style>
        /* Estilo global para la página */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
            color: #333;
        }

        /* Estilo para el encabezado y el título */
        div {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        /* Estilo para tablas */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tr:nth-child(even) {
            background-color: #e9e9e9;
        }

        /* Estilo para enlaces de acción */
        td a {
            text-decoration: none;
            color: #007bff;
            padding: 5px 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            margin-right: 5px;
            transition: all 0.3s;
        }

        td a:hover {
            background-color: #007bff;
            color: white;
        }

        /* Diseño responsivo */
        @media (max-width: 600px) {
            table, th, td {
                font-size: 12px;
                padding: 5px;
            }
        }
    </style>
    </style>
</head>
<body>
    <div>
        <div>LISTA DE USUARIOS</div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>ap. paterno</th>
                    <th>ap. materno</th>
                    <th>direccion</th>
                    <th>mail</th>
                    <th>telefono</th>
                    <th>estado</th>
                    <th>opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $resultado=mysqli_query($con,$usuarios);
                while ($fila=mysqli_fetch_assoc($resultado) ) {
                    ?> 
                        <tr>
                        <td> <?php echo $fila ["id"]; ?></td>
                        <td> <?php echo $fila ["nombre"]; ?></td>
                        <td> <?php echo $fila ["ap_pat"]; ?></td>
                        <td> <?php echo $fila ["ap_mat"]; ?></td>
                        <td> <?php echo $fila ["direccion"]; ?></td>
                        <td> <?php echo $fila ["mail"]; ?></td>
                        <td> <?php echo $fila ["telefono"]; ?></td>
                        <td> <?php echo $fila ["estado"]; ?></td>
                        <td>
                             <a href="editar.php?id=<?php echo $fila["id"]; ?>">Editar</a>
                             <a href="eliminar.php?id=<?php echo $fila["id"]; ?>">Eliminar</a>
                             <a href="ver.php?id=<?php echo $fila["id"]; ?>">Ver</a>
                        </td>
                        </tr>
                        <?php
                        }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>