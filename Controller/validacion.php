<?php
// Incluir el archivo de conexión
include_once("D:Xamp/htdocs/phpPuro/PoemaBD(21-05)/Config/conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    $contrasenia_encriptada = hash('sha256', $contrasenia);

    if (!empty($usuario) && !empty($contrasenia)) {
        $conn = conectar_bd();

        $stmt = $conn->prepare("CALL SpVerificarUsuario(?, ?)");
        $stmt->bind_param("ss", $usuario, $contrasenia_encriptada);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows !== 0) {
            $fila = $resultado->fetch_assoc();
            $nombre = $fila['nombre'];
            session_start();
            $_SESSION['registro_exitoso'] = true; // Establecer el indicador de sesión
            $_SESSION['nombre_usuario'] = $nombre;
            $_SESSION['credenciales'] = true;
            header("Location: ../index.php");
            exit(); // Asegurarse de que no se ejecute más código después de la redirección
        } else {
            echo "<div class='alert alert-danger'>Error al registrar. Inténtalo de nuevo.</div>";
            header("Location: ../index.php?page=login2");

        }

        $stmt->close();
        desconectar($conn);
    } else {
        echo "<div class='alert alert-danger'>Todos los campos son obligatorios.</div>";
    }
} 


