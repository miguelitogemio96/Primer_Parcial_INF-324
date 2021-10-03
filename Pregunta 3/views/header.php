<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


    <title>FCPN</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="<?php echo RUTA?>">Campus <span class="fcpn">FCPN</span></a></p>
            </div>
            <div class="derecha">
                <nav class="menu">
                    <ul>
                    <?php if (isset($_SESSION['usuario'])) {$tipo = obtener_tipo_usuario(($_SESSION['usuario']), $conexion);}?>
                        <?php if ($tipo == 'e'):?>
                            <li><a href="notas.php">Ver Notas</a></li>
                        <?php endif;?>
                        <?php if ($tipo == 'd'):?>
                            <li><a href="promedio.php">Ver Promedio</a></li>
                        <?php endif;?>
                        
                        

                        
                    </ul>
                </nav>
                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <?php if (isset($_SESSION['usuario'])):?>
                            <li><a href="cerrar.php">Cerrar Sesion<i class="icono fa fa-user"></i></a></li>
                        <?php else:?>
                            <li><a href="login.php">Iniciar Sesion<i class="icono fa fa-user"></i></a></li>
                        <?php endif;?>
                        

                        
                    </ul>
                </nav>
            </div>
        </div>
    </header>