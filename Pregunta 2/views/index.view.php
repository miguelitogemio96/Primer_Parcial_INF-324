<?php require 'header.php'; ?>
<div class="contenedor">
    <?php foreach($carreras as $carrera): ?>
        <div class="post">
            <article>
                <h1 class="titulo"><a href="carrera.php?id=<?php echo $carrera['id']; ?>"><?php echo $carrera['des']; ?></a></h1>
                <p class="fecha">Ciencias Puras</p>
                <div class="thumb">
                    <a href="carrera.php?id=<?php echo $carrera['id']; ?>">
                        <img src="<?php echo RUTA?>/img/<?php echo $carrera['img']; ?>" alt="logo carrera">
                    </a>
                </div>
                <p class="extracto"><?php echo $carrera['extracto']; ?></p>
                <a href="carrera.php?id=<?php echo $carrera['id']; ?>" class="continuar">Continuar Leyendo</a>
            </article>
        </div>
    <?php endforeach; ?>
    
    <?php require 'paginacion.php'; ?>
</div>
<?php require 'footer.php'; ?>
