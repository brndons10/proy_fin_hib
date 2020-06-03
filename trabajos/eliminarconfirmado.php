<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Producto</title>
    </head>
    <body>
        <h2>Eliminar Producto</h2>
        <?php
        // put your code here
        $idprod=$_GET['id'];
        $nombreproducto=$_GET['nombreprod'];
        
        echo "Eliminar el producto: ".$idprod." ".$nombreproducto;
        
        include "../componentesphp/conexionempresa.php";
        $sentencia="delete from productos where idproducto= $idprod";
        echo "<br><br>";
        echo $sentencia;
        
        $resultado=  mysqli_query($conexion, $sentencia);
        $numero=  mysqli_affected_rows($conexion);
        
        echo "<br><br>";
        
        if($resultado&&$numero =1){
            echo"El producto con id: ".$idprod." y nombre ".$nombreproducto." ha sido eliminado.";
        }else{
            echo"ERROR. El producto con id: ".$idprod." y nombre ".$nombreproducto." no se pudo eliminar.";
        }
        ?>
        <a href="https://anacarolinamartinez.000webhostapp.com/ejemplosphpBd/eliminarmodificarproductos.php">Regresar</a>
    </body>
</html>
