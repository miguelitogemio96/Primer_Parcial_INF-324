<?php session_start();
require 'admin/config.php';
require 'funciones.php';
$conexion = conexion($bd_config);
if (!$conexion) {header('Location: error.php');}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = limpiarDatos($_POST['usuario']);
	$password = limpiarDatos($_POST['password']);
	$password = hash('sha512', $password);
	$resultado = iniciar_sesion($usuario, $password, $conexion);
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	} 
}

require 'views/login.view.php';
?>
<!-- 

$password = hash('sha512', '10101010');
print_r($password);

insertar_usuario("10101010","miguelgemio",$password,"e", $conexion);
$password = hash('sha512', '1234567');
print_r($password);
insertar_usuario("1234567","moyosilva",$password,"d", $conexion); -->