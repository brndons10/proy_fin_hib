<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Trabajo</title>
    </head>
    <body>
        <h2>Eliminar Trabajo</h2>
        <?php
        // put your code here
        $id=$_GET['id'];
        //$Categoria=$_GET['csategoria'];
        
        //echo "Eliminar el producto: ".$id." ".$categoria;
        
        include 'CONEXION.php';
        $sentencia="delete from trabajos where id= '$id'";
        echo "<br><br>";
        echo $sentencia;
        
        $resultado=  mysqli_query($conexion, $sentencia);
        $numero=  mysqli_affected_rows($conexion);
        
        echo "<br><br>";
        
        if($resultado&&$numero =1){
            echo"El trabajo con id: ".$id." ha sido eliminado.";
        }else{
            echo"ERROR. El producto con id: ".$id." no se pudo eliminar.";
        }
        ?>
        <a href="VerTrabajos.php">Regresar</a>
    </body>
</html>
