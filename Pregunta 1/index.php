<?php
require 'admin/config.php';
require 'funciones.php';
$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: error.php');
}

$carreras = obtenerCarreras($campus_config['carreras_por_pagina'], $conexion);

if (!$carreras){
    header('Location: error.php');
}
require 'views/index.view.php';
?>