<?php 
    include 'pages\header\header_admin.php';
    $conexion = new conexion();
    $proyectos = $conexion->consultar("SELECT * FROM `proyecto`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css\index_admin.css">
</head>
<body>
    <div>
        <h1>Administrador portafolio</h1>

        <div class="cont-proyectos">
            <?php 
                foreach($proyectos as $proyecto) { ?>
                    <div class="proyecto">
                        <h2><?php echo $proyecto['titulo']?></h2>
                        <div class="cont-img">
                            <img src="assets\img_proyectos\<?php echo $proyecto['img']?>" alt="">
                        </div>
                        
                        <div>
                        <a href="<?php echo $proyecto['linkProyecto']?>" target="_blank">Link Proyecto</a>
                        <a href="<?php echo $proyecto['linkGithub']?>" target="_blank">Link Github</a>
                        </div>
                    </div>
                <?php } ?>
        
        </div>
    </div>


    <?php include 'pages\footer\footer.php';?>
</body>
</html>


