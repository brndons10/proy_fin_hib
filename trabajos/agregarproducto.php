<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Producto</title>
    </head>
    <body>
        <h2>Agregar Producto.</h2>
        <p>Recibe los datos de un producto y lo agrega a la base de datos.</p>
        
        <?php
        // Validar si se obtienen los datos
        $nombreproducto= $_POST['nombreproducto'];
        $precio= $_POST['precio'];
        $imagen=$_POST['imagen'];
        $categoria=$_POST['categoria'];
        //echo "Producto ".$nombreproducto.", ".$precio.", ".$imagen.", ".$categoria;
        include"/public_html/componentesphp/conexionempresa.php
";
        
        $sentencia="insert into productos (nombreproducto, precio,imagen,idcategoria) values ('$nombreproducto',$precio,'$imagen',$categoria)";
        echo"<br><br>";
        //echo $sentencia;
        
        
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
