<?php
include_once("conexion.php");

// Definir el usuario y contraseña a validar
$usuario = "1234";
$contrasenia = "12341";

// Conectar a la base de datos
$conn = conectar_bd();

// Escapar los valores para evitar inyección SQL (si es necesario)
$usuario = mysqli_real_escape_string($conn, $usuario);
$contrasenia = mysqli_real_escape_string($conn, $contrasenia);

// Construir la consulta SQL para verificar el usuario y contraseña
$consulta = "SELECT * FROM usuario WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'";

// Ejecutar la consulta
$resultado = mysqli_query($conn, $consulta);

// Verificar si se encontró algún registro
if (mysqli_num_rows($resultado) > 0) {
    echo "El usuario y contraseña son válidos.";
} else {
    echo "El usuario y/o contraseña son inválidos.";
}

// Cerrar la conexión
desconectar($conn);
?>
