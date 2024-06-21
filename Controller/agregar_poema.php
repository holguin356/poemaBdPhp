<?php
include_once("D:Xamp/htdocs/phpPuro/PoemaBD(21-05)/Config/conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $poema = $_POST['poema'];

    if (!empty($titulo) && !empty($autor) && !empty($poema)) {
        $conn = conectar_bd();
        $consulta = "CALL SpAgregarPoema(?, ?, ?, ?)";
        $resultado = mysqli_prepare($conn, $consulta);
        session_start();
        if (isset($_SESSION['nombre_usuario'])) {
            $usuario = $_SESSION['nombre_usuario'];
        } else {
            $usuario = "Anonimo";
        }
        mysqli_stmt_bind_param($resultado, 'ssss', $titulo, $autor, $poema, $usuario);

        if (mysqli_stmt_execute($resultado)) {
            session_start();
            $_SESSION['registro_exitoso'] = true; // Establecer el indicador de sesión

            header("Location: ../index.php?page=login");
            exit(); // Asegurarse de que no se ejecute más código después de la redirección
        } else {
            echo "<div class='alert alert-danger'>Error al registrar. Inténtalo de nuevo.</div>";
        }

        desconectar($conn);
    } else {
        echo "<div class='alert alert-danger'>Todos los campos son obligatorios.</div>";
    }
} else {
    echo "<div class='alert alert-danger'>Método de solicitud no válido.</div>";
}