<?php require 'header.php'; ?>
<div class="contenedor">
    <div class="post">
        <article>
            <h1 class="titulo"><?php echo $carrera['des'];?></h1>
            <p class="fecha">Ciencias Puras</p>
            <div class="thumb">                
                 <img src="<?php echo RUTA?>/img/<?php echo $carrera['img']; ?>" alt="logo carrera">
            </div>
            <p class="extracto"><?php echo $carrera['texto'];?></p>
        </article>
        <section class="paginacion">
            <ul style="text-align: left;">
                <li><a href="<?php echo RUTA?>">Volver al Menu Principal</a></li>
            </ul>
        </section>
    </div>
</div>
<?php require 'footer.php'; ?>
