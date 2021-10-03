<?php require 'header.php'; ?>
<div class="contenedor">
    <div class="post">
        <article>
            <h1 class="titulo">NOTAS</h1>
            <p class="fecha">Segundo Semestre - 2021</p>
            <div class="thumb">                
                 <img src="<?php echo RUTA?>/img/fac.png" alt="logo carrera">
            </div>
            <p class="extracto">Univ: <span class="nombre"><?php echo '  '.$datos_usuario['nombre']?></span></p>
            <p class="extracto">CI: <span class="nombre"><?php echo ' '.$datos_usuario['ci']?></span></p>   
            <table>
                <thead>
                    <tr>
                        <th>Sigla</th><th>Nota 1</th><th>Nota 2</th><th>Nota 3</th><th>Nota Final</th>
                    </tr>
                </thead>
            <?php foreach($notas as $nota): ?>
                <tr>
                    <td><?php echo $nota['sigla'];?></td>
                    <td><?php echo $nota['nota1'];?></td>
                    <td><?php echo $nota['nota2'];?></td>
                    <td><?php echo $nota['nota3'];?></td>
                    <td><?php echo $nota['notaf'];?></td>
                </tr>
            <?php endforeach; ?>            
		</table>
        <br>
        </article>
        <section class="paginacion">
            <ul style="text-align: left;">
                <li><a href="<?php echo RUTA?>">Volver al Menu Principal</a></li>
            </ul>
        </section>
    </div>
</div>
<?php require 'footer.php'; ?>