<?php require 'header.php'; ?>
<div class="contenedor">
    <div class="post">
        <article>
            <h1 class="titulo">PROMEDIO DE NOTAS POR DEPARTAMENTO</h1>
            <p class="fecha">Segundo Semestre - 2021</p>
            <div class="thumb">                
                 <img src="<?php echo RUTA?>/img/fac.png" alt="logo carrera">
            </div>
            <p class="extracto">DOCENTE: <span class="nombre"><?php echo ' '.$datos_usuario['nombre']?></span></p>
            <p class="extracto">CI: <span class="nombre"><?php echo ' '.$datos_usuario['ci']?></span></p>            
            <table>
			<thead>
				<tr>
					<th>La Paz</th><th>Cochabamba</th><th>Santa Cruz</th>
				</tr>
			</thead>
			<tr>
				<td><?php echo $pLP[0]?></td><td><?php echo $pCB[0]?></td><td><?php echo $pSC[0]?></td>
			</tr>
			
		</table>
        </article>
        <br>
        <section class="paginacion">
            <ul style="text-align: left;">
                <li><a href="<?php echo RUTA?>">Volver al Menu Principal</a></li>
            </ul>
        </section>
    </div>
</div>
<?php require 'footer.php'; ?>