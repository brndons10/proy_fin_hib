<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <title>Mostrar Trabajos</title>
        
    </head>
    <body>
        <h2>Mostrar Tabajos</h2>
        <p>Se muestran todos los trabajos registrados
        </p>
<?php
// Conexión a la base de datos
include "CONEXION.php";


$sentencia = " select * from trabajos order by id";
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
    "<td>$ " . $fila['paga'] . "</td>" .
    "<td>" . $fila['dir'] . "</td>" .
    "<td>" .$fila['desc'] . "'></td>" .
    "<td>" . $fila['tel'] . "</td>" .
    "<td><a href='eliminarTrabajo.php?id=".
    $fila['id']."& nombre=".$fila['categoria'].
    "'>Eliminar</a></td>".
    "<td><a href='modificarTrabajo.php?id=".$fila['id']."& categoria=". $fila['categoria'].
    "&paga=".$fila['paga']."&dir=".$fila['dir']."&desc=".$fila['desc'].
     "&tel=".$fila['tel'].
    "'>Modificar</a>".
    "</td>".
    "</tr>";
}
echo "</table>";
?>
    </body>
</html>
