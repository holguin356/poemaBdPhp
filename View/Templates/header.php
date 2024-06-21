<?php


// Inicializar las variables
global $nombreUsuario; // Declarar variable global
if (isset($_SESSION['nombre_usuario'])) {
    $mensaje = $_SESSION['nombre_usuario'];
    $nombreUsuario = $mensaje; 

} else {
    $mensaje = "Eres invitado";
    $nombreUsuario = "Anonimo"; 
}



if (isset($_SESSION['credenciales'])) {
    $dCredenciales = "d-none";
    $dCerrar = "";
} else {
    $dCredenciales = "";
    $dCerrar = "d-none";
}

// Verificar si el registro fue exitoso
$registro_exitoso = false;
if (isset($_SESSION['registro_exitoso'])) {
    $registro_exitoso = true;
    unset($_SESSION['registro_exitoso']); // Limpiar el indicador de sesión
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poemas Cortos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/repository/style.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <p class="text-white nav-link mb-0"><?php echo $mensaje; ?></p>
                    </li>
                </ul>
                <ul class="navbar-nav <?php echo $dCredenciales; ?>">
                    <li class="nav-item">
                        <a class="text-primary text-decoration-underline nav-link btn"
                            href="index.php?page=register">Registrate</a>
                    </li>
                    <li class="nav-item">
                        <p class="text-white nav-link mb-0">o</p>
                    </li>
                    <li class="nav-item">
                        <a class="text-success text-decoration-underline nav-link btn"
                            href="index.php?page=login">Inicia sesión</a>
                    </li>
                </ul>
                <ul class="navbar-nav <?php echo $dCerrar; ?>">
                    <li class="nav-item">
                        <a class="text-primary text-decoration-underline nav-link btn" href="index.php?page=agregar_poema">Agregar poema</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-danger text-decoration-underline nav-link btn" href="Controller/logout.php">Cerrar
                            sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <?php if ($registro_exitoso): ?>
        <div class='modal' tabindex='-1' style="display: block;">
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title'>Registro Exitoso</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <p>Felicidades!! te has registrado a la página, inicia sesión para continuar.</p>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Mostrar el modal automáticamente
            document.addEventListener('DOMContentLoaded', function () {
                var myModal = new bootstrap.Modal(document.querySelector('.modal'));
                myModal.show();
            });
        </script>
    <?php endif; ?>
</body>

</html>