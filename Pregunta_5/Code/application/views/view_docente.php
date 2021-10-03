<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
    <style type="text/css">
        /* Paleta de Colores */
        :root{
            --primario: #2779e4;
            --secundario: rgb(249, 249, 255);
            --gris:rgba(255,255,255,.7);
            --gris_claro: #ebebeb;
            --negro_translucido: rgba(0,0,0, .5);
            --negro: #000;
            --gris_oscuro:#595959;
            --gris_paginacion: #a8a8a8;
            --plomo_claro:#747474;
            --celeste:#59c3ec;
            --blanco: #fff;
        }

        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-size: 16px;
            font-family: 'Open Sans', sans-serif;
            background: var(--gris_claro) ;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: "Oswald", Arial, Sans-serif;
            font-weight: normal;
        }

        a {
            text-decoration: none;
            color:var(--primario);
        }

        a:hover {
            text-decoration: underline;
        }

        .contenedor {
            max-width: 1000px;
            width: 90%;
            margin: auto;
        }

        .izquierda {
            float: left;
        }

        .derecha {
            float: right;
        }

        /* --- Header ---*/

        header {
            color:var(--secundario);
            margin-bottom: 30px;
            background: var(--primario);
        }

        header .contenedor {
            overflow: hidden;
        }

        header .logo {
            max-width: 300px;
        }

        header .logo a {
            color: var(--secundario);
            font-family: "Oswald", Arial, Sans-serif;
            font-size: 28px;
            line-height: 70px;
        }

        header .logo a:hover {
            text-decoration: none;
        }

        header .buscar {
            display: inline-block;
            position: relative;
            margin-right: 15px;
        }

        header .buscar input[type="text"]{
            background: none;
            border:1px solid var(--gris);
            color:var(--gris);
            height: 30px;
            padding: 0 10px;
            padding-right: 32px; 
        }

        header .buscar input[type="text"]:hover,
        header .buscar input[type="text"]:focus {
            color:var(--secundario);
            border:1px solid var(--secundario);
        }

        header .buscar .icono {
            color:var(--gris);
            position: absolute;
            right: 0;
            background: none;
            border:none;
            cursor:pointer;
            padding: 6px;
            font-size: 16px;
            line-height: 16px;
        }

        header .buscar .icono:hover {
            color: var(--secundario);
        }

        header .menu {
            display: inline-block;
        }

        header .menu ul {
            list-style: none;
        }

        header .menu ul li {
            display: inline-block;
            line-height: 70px;
        }

        header .menu ul li a {
            color: var(--secundario);
            display: block;
            padding: 0px 20px;
            font-weight: bold;
        }

        header .menu ul li a:hover {
            background: var(--negro);
            text-decoration: none;
        }

        header .menu ul li a .icono {
            margin-left: 15px;
        }

        /* --- Post --- */
        .post {
            width: 100%;
            background: var(--secundario);
            box-shadow: 0px 0px 5px var(--negro_translucido);
            margin-bottom: 30px;
            padding: 30px;
        }

        .post article .titulo {
            font-family: "Oswald", Arial, Sans-serif;
            font-size: 28px;
            font-weight: normal;
            line-height: 28px;
            margin-bottom: 10px;
        }

        .post article .titulo a {
            color:var(--negro);
        }

        .post article .fecha {
            color:var(--plomo_claro);
            font-size: 14px;
            margin-bottom: 20px;
        }

        .post article .thumb {
            margin-bottom: 20px;
        }

        .post article .thumb img {
            margin-left: 40%;
            vertical-align: top;
            
            width: 20%;
            max-height: 50%;
        }
        .thumb_inicio img{
            margin-left: 40%;
            max-width: 20%;
        }

        .post article .extracto {
            font-size: 14px;
            line-height: 20px;
            margin-bottom: 20px;
        }

        .post article .continuar {
            color:var(--primario);
            font-weight: bold;
        }

        .btn {
            padding: 15px;
            display: inline-block;
            margin: 15px 0;
            background: var(--gris_oscuro);
            color:var(--secundario);
            font-size: 1em;
            font-family: Arial, sans-serif, helvetica;
            border-radius: 2px;
            border:none;
        }

        .btn:hover {
            text-decoration: none;
            background: var(--primario);
        }

        /* --- Footer --- */
        footer {
            background: var(--primario);
            color: var(--secundario);
        }

        footer .copyright {
            text-align: center;
            font-size: 14px;
            padding: 15px 0;
        }

        /* --- Paginacion --- */

        .paginacion {
            margin-bottom: 30px;
        }

        .paginacion ul {
            list-style: none;
            text-align: center;
        }
        .paginacion ul {
            list-style: none;
            text-align: center;
        }

        .paginacion ul li{
            display: inline-block;
            margin:0 5px;
            color:var(--secundario);
        }

        .paginacion ul li a {
            display: block;
            padding:10px 20px;
            background: var(--gris_oscuro);
            color:var(--secundario);
        }

        .paginacion ul li a:hover {
            background: var(--primario);
            text-decoration: none;
        }

        .paginacion ul .active {
            background: var(--primario);
            padding:10px 20px;
        }

        .paginacion ul .disabled{
            background: var(--gris_paginacion);
            padding:10px 20px;
            cursor: not-allowed;
        }

        .paginacion ul .disabled:hover {
            background: var(--gris_paginacion);
        }

        /* --- Formularios --- */
        .formulario {
            width: 100%;
            overflow: hidden;
        }

        .formulario input[type="text"],
        .formulario input[type="email"],
        .formulario input[type="password"],
        .formulario textarea {
            border: 1px solid var(--gris_paginacion);
            border-radius: 2px;
            padding: 16px;
            width: 100%;
            display: block;
            margin-bottom:20px;
            font-family:Arial, sans-serif, helvetica;
            font-size: 1em;
            color: var(--negro);
        }

        .formulario input[type="text"]:focus,
        .formulario input[type="email"]:focus,
        .formulario input[type="password"]:focus,
        .formulario textarea:focus {
            border: 2px solid var(--gris_oscuro);
            padding: 15px;
        }

        .formulario textarea {
            max-width: 100%;
            min-width: 100%;
            min-height: 300px;
        }

        .formulario input[type="submit"]{
            padding: 15px;
            background: var(--gris_oscuro);
            color:var(--secundario);
            font-size: 1em;
            font-family: Arial, sans-serif, helvetica;
            border-radius: 2px;
            border:none;
            float: right;
            cursor: pointer;
        }

        .formulario input[type="submit"]:hover{
            background: var(--primario);
        }
        .fcpn {
            font-size: 45px;
            font-weight: 700;
        }
        .nombre {
            font-size: 20px;
            font-weight: 700;
        }

        /* TABLA */

        table{
            background-color: var(--blanco);
            text-align: left;
            border-collapse: collapse;
            width: 100%;
        }

        th, td{
            padding: 20px;
        }

        thead{
            background-color: var(--primario);
            border-bottom: solid 5px #0F362D;
            color: var(--blanco);
        }

        tr:nth-child(even){
            background-color: var(--gris_claro);
        }

        tr:hover td{
            background-color: var(--celeste);
            color: var(--blanco);
        }
	</style>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="#">Campus <span class="fcpn">FCPN</span></a></p>
            </div>
            <div class="derecha">
                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="login.php">Iniciar Sesion<i class="icono fa fa-user"></i></a></li>   
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="contenedor">
    <div class="post">
        <article>
            <h1 class="titulo">Altas y Bajas</h1>
            <div class="thumb">                
                 <img src="../../images/fac.png" alt="logo carrera">
            </div>
            <p class="extracto">TABLA: <span class="nombre">DOCENTES</span></p>   
            <table>
                <thead>
                    <tr>
                        <th>Ci</th><th>Nombre</th><th>fnacimiento</th><th>Cod Departamento</th><th>Opciones</th>
                    </tr>
                </thead>
                <?php 
                foreach ($personas as $persona){
                    echo "<tr>";
                    $ci= $persona->ci;
                    echo "<td>".$persona->ci."</td>";
                    echo "<td>".$persona->nombre."</td>";
                    echo "<td>".$persona->fnacimiento."</td>";
                    echo "<td>".$persona->departamento."</td>";
                    echo "<td><p><a href=http://localhost/PrimerParcial/Pregunta_5/Code/index.php/Editar?ci=$ci>Editar</a></p>";
                    echo "<p><a href=http://localhost/PrimerParcial/Pregunta_5/Code/index.php/Eliminar?ci=$ci>Eliminar</a></p></td>";
                    echo "</tr>";
                }
                ?>
            
		    </table>
            <br>
        </article>
        <section class="paginacion">
        <ul>
            <li><a href="http://localhost/PrimerParcial/Pregunta_5/Code/index.php/Agregar">Agregar Docente</a></li>
        </ul>
        </section>
        <section class="paginacion">
            <ul style="text-align: left;">
                <li><a href=#">Volver al Menu Principal</a></li>
            </ul>
        </section>
    </div>
    </div>
    <footer>
    <p class="copyright">Copyright 2021-2022 Gemio Quispe Jose Miguel</p>
    </footer>
</body>
</html>