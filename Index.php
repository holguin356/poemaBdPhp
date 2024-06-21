<?php
session_start(); // Iniciar la sesión para poder interactuar con el server

include('View/Templates/header.php');

if (isset($_GET['page'])) { #su existe la propiedad page osea si me la enviaron
 $page = $_GET['page']; #guardamos lo que dice la page que me enviaron
 if ($page == 'register') {
    include('View/Pages/registro.html');
 } elseif ($page == 'login') {
    include('View/Pages/login.php');
    }
elseif ($page == 'agregar_poema') {
    include('View/Pages/formulario_agregar_poema.php');
}
} else {
include('View/Pages/poemas.php'); 
}





include('View/Templates/footer.html');
include('Controller/validacion.php');
