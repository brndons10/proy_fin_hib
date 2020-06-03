<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buscador</title>
        <style>
            table,tr,td, th{
                border:1px solid blue;
            }
            td{
                padding: 5px;
            }
            img{
                width: 100px;
                height: 100 px;
            }
        </style>
    </head>
    <body>
        <h2>Buscar Trabajos</h2>
        <p>Escribir el nombre o parte del nombre del trabajo a buscar.</p>
        <hr>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Nombre:&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id='categoria' name='categoria'>
            <br><br>
            <input type='submit' value=' Buscar '>
        </form>

        <?php
        // put your code here
        if (isset($_POST['categoria'])and $_POST['categoria'] != "") {
            echo "codigo PHP";
            include "CONEXION.php";
            //Obtener nombre del trabajo a buscar
            $categoria = $_POST['categoria'];
            $sentencia = "select * from trabajos "
                    . "where categoria like '%"
                    . $categoria
                    . "%'";
            echo $sentencia;


//Ejecutar sentencia
            $resultado = mysqli_query($conexion, $sentencia);
//Validar resultado de la sentencia
            if (!$resultado) {
                echo "Sentencia no ha podido ser ejecutada.";
            }
            echo "<table>
            <tr>
            <th>ID</th>
            <th>Categoría</th>
            <th>Paga</th>
            <th>Dirección</th>
            <th>Descripción</th>
            <th>Teléfono</th>
            </tr>
            ";
            while ($fila = mysqli_fetch_array($resultado)) {
                echo "<tr> 
                <td>" . $fila['id'] . "</td>" .
                " <td>" . $fila['categoria'] . "</td>" .
                "<td>" . $fila['paga'] . "</td>" .
                "<td>" . $fila['dir'] . "</td>" .
                "<td>" . $fila['desc'] . "</td>" .
                "<td>" . $fila['tel'] . "</td>" .
                "</tr>";
            }
            echo "</table>";
        }
        ?>
    </body>
</html>
