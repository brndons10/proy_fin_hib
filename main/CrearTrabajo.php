<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Creacion</title>
    </head>
    <body>
        <h2>Crear Trabajo</h2>
        
        <?php
        // Validar si se obtienen los datos
        $id= $_POST['id'];
        $categoria= $_POST['categoria'];
        $paga=$_POST['paga'];
        $dir=$_POST['dir'];
        $desc=$_POST['desc'];
        $tel=$_POST['tel'];
       include"CONEXION.php";
        
        $sentencia="insert into productos (id, categoria, paga, dir, desc, tel) values ($id,'$categoria','$paga','$dir', '$desc', '$tel')";
        echo"<br><br>";
        
        
        //Ejecutar sentencia
        $resultado= mysqli_query($conexion, $sentencia);
        
        //Validar registro agregado
        $numero=  mysqli_affected_rows($conexion);
        if($resultado && $numero==1){
            echo "EL producto ".$nombreproducto."se ha agregado exitosamente.";
        }
        else{
            echo"No se ha podido agregar el producto ".$nombreproducto;
        }
        
        ?>
    </body>
</html>
