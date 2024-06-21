<?php
function conectar_bd(){
#inicializacion
$server = "localhost";
$user = "root";
$password = "";
$database = "bd_poema";
#conectar
$conn = mysqli_connect($server, $user, $password, $database);
#verificar conexion
if(!$conn){
    die ("error de conexion");
}
return $conn;
}

function desconectar($conn){
    mysqli_close($conn);
}