<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Producto</title>
    </head>
    <body>
        <h2>Modificar Producto</h2>
        <p>Escriba los nuevos datos para el producto.</p>
        <?php
        // put your code here
        $idproducto=$_GET['id'];
        $nombreproducto=$_GET['nombre'];
        $precio=$_GET['precio'];
        $imagen=$_GET['imagen'];
        $idcategoria=$_GET['idcategoria'];
        
        ?>
        <form method="post" action="modificarproducto2.php" id="nombreproducto">
            Id: <input type="text" name="idprod" id="idprod" value="<?php echo $idproducto;?>" readonly>
            <br><br>
            Nombre del producto:*
            <input type="text" name="nombreproducto" id="nombreproducto" required
                   value="<?php echo $nombreproducto;?>">
            <br><br>
            Precio:*
            <input type="text" name="precio" id="precio" required
                   value="<?php echo $precio;?>">
            <br><br>
            Nombre del archivo imagen (incluir extension):*
            <input type="text" name="imagen" id="imagen" required
                   value="<?php echo $imagen;?>">
            <br><br>
           
            Categoria: (1=Abarrotes, 2=Ferreteria, 3=Electronicos, 4=Muebles)*
            <input type="number" min="1" max="4" name="categoria" id="categoria" required
                   value="<?php echo $idcategoria;?>">
            <br><br>
            <input type="submit" value="  Modificar  ">
        </form>
        
    </body>
</html>
