<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Trabajo</title>
    </head>
    <body>
        <h2>Modificar Trabajo</h2>
        <p>Escriba los nuevos datos para el trabajo.</p>
        <?php
        // put your code here
        $id=$_GET['id'];
        $categoria=$_GET['categoria'];
        $paga=$_GET['paga'];
        $dir=$_GET['dir'];
        $desc=$_GET['desc'];
        $tel=$_GET['tel'];
        ?>
        <form method="post" action="modificarTrabajo2.php">
            Id: <input type="text" name="id" id="id" value="<?php echo $id;?>" readonly>
            <br><br>
            Nombre de categoría:*
            <input type="text" name="categoria" id="categoria" required
                   value="<?php echo $categoria;?>">
            <br><br>
            Paga:*
            <input type="text" name="paga" id="paga" required
                   value="<?php echo $paga;?>">
            <br><br>
            Dirección:*
            <input type="text" name="dir" id="dir" required
                   value="<?php echo $dir;?>">
            <br><br>
           
            Descripción:* 
            <input type="text" name="desc" id="desc" required
                   value="<?php echo $desc;?>">
            Teléfono: 
            <input type="text" name="tel" id="tel" 
                   value="<?php echo $tel;?>">
            <br><br>
            <input type="submit" value="  Modificar  ">
        </form>
        <a href='VerTrabajos.php'> Volver </a>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

