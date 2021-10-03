<?php 
function conexion($bd_config){
    try{
        $conexion = new PDO('mysql:host='.$bd_config['host'].'; dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    }catch (PDOException $e){
        return false;
    }   
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