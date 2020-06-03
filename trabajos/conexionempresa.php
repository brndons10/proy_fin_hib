<?php
$conexion = mysqli_connect("localhost", "root", "root", "empresa2");
//Validar conexion
if (mysqli_connect_errno()) {
    echo "Error de conexión a la base de datos." .
    mysqli_connect_error();
}//Establecer el cotejamiento 
mysqli_set_charset($conexion, "utf8");




