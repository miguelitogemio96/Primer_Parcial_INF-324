<?php session_start();
// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
    require 'admin/config.php';
    require 'funciones.php';
    $usuario = $_SESSION['usuario'];
    $conexion = conexion($bd_config);
    if (!$conexion){header('Location: error.php');}
    $tipo = obtener_tipo_usuario($usuario, $conexion);
    if ( $tipo == 'e'){
        $datos_usuario = obtener_datos_personales($usuario, $conexion);
        $notas = obtener_notas($usuario, $conexion);
        require 'views/notas.view.php';
    }else{
        header('Location: cerrar.php');
    }
} else {
	header('Location: login.php');
	die();
}
?>