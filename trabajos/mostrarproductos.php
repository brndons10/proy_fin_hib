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
        <title>Mostrar Productos</title>
        
    </head>
    <body>
        <h2>Mostrar Productos</h2>
        <p>
            Se muestran todos los productos de la tienda, ordenados por categoría y nombre del producto.
        </p>
<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "id9707443_ana", "666tnotb", "id9707443_empresa2");
//Validar conexion
if (mysqli_connect_errno()) {
    echo "Error de conexión a la base de datos." .
    mysqli_connect_error();
}//Establecer el cotejamiento 
mysqli_set_charset($conexion, "utf8");


$sentencia = "select idproducto, nombreproducto, precio, imagen, idcategoria from productos order by idcategoria,nombreproducto";
//Ejecutar sentencia
$resultado = mysqli_query($conexion, $sentencia);
//Validar resultado de la sentencia
if (!$resultado) {
    echo "Sentencia no ha podido ser ejecutada.";
}
echo "<table>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>    </th>
            <th>Categoría</th>
            </tr>
            ";
while ($fila = mysqli_fetch_array($resultado)) {
    echo "<tr> 
                <td>" . $fila['idproducto'] . "</td>" .
    " <td>" . $fila['nombreproducto'] . "</td>" .
    "<td>" . $fila['precio'] . "</td>" .
    "<td>" . $fila['imagen'] . "</td>" .
    "<td>" . "<img src='../imagenes/".$fila['imagen'] . "'></td>" .
    "<td>" . $fila['idcategoria'] . "</td>" .
    "</tr>";
}
echo "</table>";
?>
    </body>
</html>
