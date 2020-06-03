<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Producto 2</title>
    </head>
    <body>
        <h2>Modificar Productos II</h2>
        <p>Recibe los datos modificados de un producto y actualiza la base de datos.</p>
        <?php
        // put your code here
        $idprod=$_POST['idprod'];
        $nombreproducto=$_POST['nombreproducto'];
        $precio=$_POST['precio'];
        $imagen=$_POST['imagen'];
        $categoria=$_POST['categoria'];
        
        echo "Modificar el producto: ".$idprod." ".$nombreproducto." ".$precio." ".$imagen." ".$categoria;
        
        include '../componentesphp/conexionempresa.php';
        $sentencia="update productos set nombreproducto='$nombreproducto',precio=$precio".
                ", imagen='$imagen', idcategoria=$categoria where idproducto= $idprod ";
        echo "<br><br>";
        echo $sentencia;
        
        $resultado=  mysqli_query($conexion, $sentencia);
        $numero=  mysqli_affected_rows($conexion);
        
        echo "<br><br>";
        
        if($resultado&&$numero =1){
            echo"El producto con id: ".$idprod." y nombre ".$nombreproducto." ha sido modificado.";
        }else{
            echo"ERROR. El producto con id: ".$idprod." y nombre ".$nombreproducto." no se pudo modificar.";
        }
        ?>
        ?>
    </body>
</html>
