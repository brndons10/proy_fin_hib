<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Eliminar trabajo - Confirmar</title>
    </head>
    <body>
        <h2>Eliminar trabajo - Confirmar.</h2>
        <p>Favor de confirmar que desea eliminar de manera definitiva ese trabajo.</p>
        
        <?php
        // put your code here
        //datos del producto que se quiere eliminar
        $id=$_GET['id'];
        //$categoria=$_GET['categoria'];
        echo"<br><br>";
        echo "Eliminar producto ".$id;
        
        echo "<br><br>";
        echo"<a href='eliminarOK.php?id=".$id."'>  Sí </a>";
        echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo"<a href='VerTrabajos.php'>  No </a>";
        
        
        ?>
    </body>
</html>
