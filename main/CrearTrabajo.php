<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Creación</title>
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
        //Sentencia para insertar datos en la base 
        $sentencia="insert into trabajos values ('$id','$categoria','$paga','$dir', '$desc', '$tel')";
        echo"<br><br>";
        
        
        //Ejecutar sentencia
        $resultado= mysqli_query($conexion, $sentencia);
        
        //Validar registro agregado
        $numero=  mysqli_affected_rows($conexion);
        if($resultado && $numero==1){
            echo "EL trabajo ".$categoria."se ha agregado exitosamente.";
        }
        else{
            echo"No se ha podido agregar el trabajo ".$categoria;
        }
        echo"<a href='VerTrabajos.php'>  Volver </a>";
        ?>
    </body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Creación</title>
        <link rel="stylesheet" href="CrearTrabajo.css">
    </head>
    <body div class="back" style="background-image: url('chihuahua.jpeg');"

    >

            <?php
        // Validar si se obtienen los datos
        $id= $_POST['id'];
        $categoria= $_POST['categoria'];
        $paga=$_POST['paga'];
        $dir=$_POST['dir'];
        $desc=$_POST['desc'];
        $tel=$_POST['tel'];
       include"CONEXION.php";
        //Sentencia para insertar datos en la base 
        $sentencia="insert into trabajos values ('$id','$categoria','$paga','$dir', '$desc', '$tel')";
        echo"<br><br>";
     
 ?>
 <div class="wrapper">
    <div class="button" onclick="document.body.classList.add('active')">
        <span class="button-text">Verificar Trabajo
        </span>
        <div class="button-backgrounds">
        </div>
    </div>
</div>
        
<div class="wrapper">
    <div class="popup">
        <div class="popup-inside">
            <div class="backgrounds">
                <div class="background"></div>
                <div class="background background2"></div>
                <div class="background background6"></div>
            </div>
        </div>
        <div class="content">
            <div class="content-wrapper">

<?php
        //Ejecutar sentencia
        $resultado= mysqli_query($conexion, $sentencia);
        
        //Validar registro agregado
        $numero=  mysqli_affected_rows($conexion);
        if($resultado && $numero==1){
            echo "EL trabajo ".$categoria."se ha agregado exitosamente.";
        }
        else{
            echo"No se ha podido agregar el trabajo ".$categoria;
        }
        echo"<a href='VerTrabajos.php'>  Volver </a>";
        ?>

   </div>
</div>
</div>
</div>


    </body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Creación</title>
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
        //Sentencia para insertar datos en la base 
        $sentencia="insert into trabajos values ('$id','$categoria','$paga','$dir', '$desc', '$tel')";
        echo"<br><br>";
        
        
        //Ejecutar sentencia
        $resultado= mysqli_query($conexion, $sentencia);
        
        //Validar registro agregado
        $numero=  mysqli_affected_rows($conexion);
        if($resultado && $numero==1){
            echo "EL trabajo ".$categoria."se ha agregado exitosamente.";
        }
        else{
            echo"No se ha podido agregar el trabajo ".$categoria;
        }
        echo"<a href='VerTrabajos.php'>  Volver </a>";
        ?>
    </body>
</html>