<?php 
function conexion($bd_config){
    try{
        $conexion = new PDO('mysql:host='.$bd_config['host'].'; dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    }catch (PDOException $e){
        return false;
    }   
}

function iniciar_sesion($usuario, $password, $conexion){
    $sentencia = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password');
	$sentencia->execute(array(
        ':usuario' => $usuario,
        ':password' => $password
    ));
    
	$resultado = $sentencia->fetch();
	return $resultado;
}

function insertar_usuario($ci, $usuario, $password, $tipo, $conexion){
    $sentencia = $conexion->prepare("INSERT INTO `usuarios` (`ci`, `usuario`, `password`, `tipo`) VALUES (:ci, :usuario, :password, :tipo);");
    $sentencia->execute(array(
        ':ci' => $ci,
        ':usuario' => $usuario,
        ':password' => $password,
        ':tipo' => $tipo

    ));
}

function obtener_usuario($usuario, $conexion){
    $sentencia = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
	$sentencia->execute(array(
			':usuario' => $usuario
		));
	$resultado = $sentencia->fetch();
	return $resultado;
}

function obtener_notas($usuario, $conexion){
    $datos = obtener_usuario($usuario, $conexion);
    $ci = $datos['ci'];
    $sentencia = $conexion->prepare("Select SQL_CALC_FOUND_ROWS * from notas where ci = $ci");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function obtener_tipo_usuario($usuario, $conexion){
    $sentencia = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
	$sentencia->execute(array(
			':usuario' => $usuario
		));

	$resultado = $sentencia->fetch();
	return $resultado['tipo'];
}


function obtener_promedio_por_departamento($departamento, $conexion){
    $sentencia = $conexion->prepare('SELECT avg(tmp1.notaf)
                                    FROM (SELECT * from notas) tmp1, (SELECT * from personas)tmp2
                                    where tmp1.ci = tmp2.ci
                                    and tmp2.departamento = :departamento');
	$sentencia->execute(array(
			':departamento' => $departamento
		));
	$resultado = $sentencia->fetch();
	return $resultado;
}

function obtener_datos_personales($usuario, $conexion){
    $datos = obtener_usuario($usuario, $conexion);
    $ci = $datos['ci'];
    $sentencia = $conexion->prepare('Select * from personas where ci = :ci');
	$sentencia->execute(array(
			':ci' => $ci
		));
	$resultado = $sentencia->fetch();
	return $resultado;
}


function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function pagina_actual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtenerCarreras($carreras_por_pagina, $conexion){
    $inicio = (pagina_actual()>1) ? pagina_actual() * $carreras_por_pagina - $carreras_por_pagina : 0;
    $sentencia = $conexion->prepare("Select SQL_CALC_FOUND_ROWS * from carreras limit $inicio, $carreras_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function id_carrera($id){
    return (int)limpiarDatos(($id));
}

function obtener_carrera_por_id($conexion, $id){
    $resultado = $conexion->query("Select * from carreras where id = $id limit 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function numero_paginas($carreras_por_pagina, $conexion){
    $total_carrera = $conexion->prepare("Select FOUND_ROWS() as total");
    $total_carrera->execute();
    $total_carrera = $total_carrera->fetch()['total'];
    
    $numero_paginas = ceil($total_carrera / $carreras_por_pagina);
    return $numero_paginas;
}

?>