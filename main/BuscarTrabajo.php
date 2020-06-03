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
            <input type="text" id='nombreproducto' name='nombreproducto'>
            <br><br>
            <input type='submit' value=' Buscar '>
        </form>

        <?php
        // put your code here
        if (isset($_POST['nombreproducto'])and $_POST['nombreproducto'] != "") {
            echo "codigo PHP";
            include "CONEXION.php";
            //Obtener nombre del producto a buscar
            $nombreprod = $_POST['nombreproducto'];
            $sentencia = "select id, categoria, paga, dir, desc, tel from productos "
                    . "where nombreproducto like '%"
                    . $nombreprod
                    . "%' order by idcategoria,nombreproducto";
            echo $sentencia;


//Ejecutar sentencia
            $resultado = mysqli_query($conexion, $sentencia);
//Validar resultado de la sentencia
            if (!$resultado) {
                echo "Sentencia no ha podido ser ejecutada.";
            }
            echo "<table>
            <tr>
            <th>id</th>
            <th>categoria</th>
            <th>paga</th>
            <th>dir</th>
            <th>desc</th>
            <th>tel</th>
            </tr>
            ";
            while ($fila = mysqli_fetch_array($resultado)) {
                echo "<tr> 
                <td>" . $fila['idproducto'] . "</td>" .
                " <td>" . $fila['nombreproducto'] . "</td>" .
                "<td>" . $fila['precio'] . "</td>" .
                "<td>" . $fila['imagen'] . "</td>" .
                "<td>" . "<img src='../imagenes/" . $fila['imagen'] . "'></td>" .
                "<td>" . $fila['idcategoria'] . "</td>" .
                "</tr>";
            }
            echo "</table>";
        }
        ?>
    </body>
</html>
