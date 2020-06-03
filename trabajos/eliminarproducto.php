<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Producto - Confirmar</title>
    </head>
    <body>
        <h2>Eliminar producto - Confirmar.</h2>
        <p>Favor de confirmar que desea eliminar de manera definitiva ese producto.</p>
        
        <?php
        // put your code here
        //datos del producto que se quiere eliminar
        $idproducto=$_GET['id'];
        $nombreproducto=$_GET['nombre'];
        echo"<br><br>";
        echo "Eliminar producto ".$idproducto.", ".$nombreproducto;
        
        echo "<br><br>";
        echo"<a href='https://anacarolinamartinez.000webhostapp.com/ejemplosphpBd/eliminarconfirmado.php?id=".$idproducto. "&nombreprod=".$nombreproducto."'>  Sí </a>";
        echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo"<a href='eliminarmodificarproductos.php'>  No </a>";
        
        
        ?>
    </body>
</html>
