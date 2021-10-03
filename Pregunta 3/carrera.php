<?php session_start();
require 'admin/config.php';
require 'funciones.php';
$conexion = conexion($bd_config);
$id_carrera = id_carrera($_GET['id']);
if (!$conexion){
    header('Location: error.php');
}

if (empty($id_carrera))  {
    header('Location: index.php');
}

$carrera = obtener_carrera_por_id($conexion, $id_carrera);
if (empty($carrera))  {
    header('Location: index.php');
}

$carrera = $carrera[0];

require 'views/carrera.view.php';
?>