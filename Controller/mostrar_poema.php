<?php
include_once ("D:Xamp/htdocs/phpPuro/PoemaBD(21-05)/Config/conexion.php");

$conn = conectar_bd();
$consulta = "SELECT * FROM poema";
$resultado = mysqli_query($conn, $consulta);
$poemas = $resultado->fetch_all(MYSQLI_ASSOC);
desconectar($conn);


