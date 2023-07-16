<?php include 'pages\header\header_admin.php';
    $conexion = new conexion();
    $proyectos = $conexion->consultar("SELECT * FROM `proyecto`");
?>

<div>
    <h1>Administrador portafolio</h1>

    <div class="cont-proyectos">
        <?php 
            foreach($proyectos as $proyecto) { ?>
                <div>
                    <h2><?php echo $proyecto['titulo']?></h2>
                </div>
            <?php } ?>
    
    </div>
</div>


<?php include 'pages\footer\footer.php';?>

