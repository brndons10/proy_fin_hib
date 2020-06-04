<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Trabajo 2</title>
    </head>
    <body>
        <h2>Modificar Trabajo II</h2>
        <p>Recibe los datos modificados de un trabajo y actualiza la base de datos.</p>
        <?php
        // put your code here
        $id=$_POST['id'];
        $categoria=$_POST['categoria'];
        $paga=$_POST['paga'];
        $dir=$_POST['dir'];
        $desc=$_POST['desc'];
        $tel=$_POST['tel']; 
        echo "Modificar el trabajo: ".$id.", ".$categoria.", ".$paga.", ".$dir.", ".$desc.", ".$tel;
        
        include 'CONEXION.php';
        $sentencia="update trabajos set categoria='$categoria',paga='$paga'".
                ", dir='$dir', desc='$desc', tel='$tel' where id= '$id' ";
        echo "<br><br>";
        echo $sentencia;
        
        $resultado=  mysqli_query($conexion, $sentencia);
        $numero=  mysqli_affected_rows($conexion);
        
        echo "<br><br>";
        
        if($resultado&&$numero =1){
            echo"El trabajo con id: ".$id." y nombre ".$categoria." ha sido modificado.";
        }else{
            echo"ERROR. El producto con id: ".$id." y nombre ".$categoria." no se pudo modificar.";
        }
        echo"<a href='VerTrabajos.php'>  No </a>";
        ?>
    </body>
</html>




