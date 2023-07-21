<?php include '../header/header_admin.php';
    if($_POST) {
        $titulo = $_POST['titulo'];
        $imagen = $_FILES['archivo']['name'];
        $imagen_temporal = $_FILES['archivo']['tmp_name'];
        $fecha = new DateTime();
        $imagen = $fecha->getTimestamp()."_".$imagen;
        move_uploaded_file($imagen_temporal,"../../assets/img_proyectos/".$imagen);

        $linkProyecto = $_POST['linkProyecto'];
        $linkGithub = $_POST['linkGithub'];

        $conexion = new conexion();
        $sql="INSERT INTO  `proyecto` (`id`, `titulo`, `img`, `linkProyecto`, `linkGithub`) VALUES (NULL, '$titulo', '$imagen', '$linkProyecto', '$linkGithub')";
        $id_proyecto = $conexion->ejecutar($sql);

        header("location:abm.php");
        die();
    }

    $conexion = new conexion();
    $proyectos= $conexion->consultar("SELECT * FROM `proyecto`");

    // eliminar
    if($_GET) {
        if(isset($_GET['borrar'])) {
            $id = $_GET['borrar'];
            $conexion = new conexion();

            $imagen = $conexion->consultar("SELECT img FROM `proyecto` where id=".$id);            
            unlink("../../assets/img_proyectos/".$imagen[0]['img']);

            $sql = "DELETE FROM `proyecto` WHERE `proyecto`.`id`=".$id;
            $id_proyecto = $conexion->ejecutar($sql);

            header("location:abm.php");
            die();
        }

        // modificar
        if(isset($_GET['modificar'])) {
            $id = $_GET['modificar'];

            header("location:../modificar/modificar.php?modificar=".$id);
            die();
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>

    <link rel="stylesheet" href="./adm.css">

</head>
<body>
<div class="contenedor">
    <!-- Agregar proyecto -->
    <h2>Agregar proyecto</h2>

    <form action="abm.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="titulo">Titulo proyecto</label>
            <input required type="text" name="titulo" id="titulo">
        </div>
        <div>
            <label for="archivo">Imagen</label>
            <input required type="file" name="archivo" id="archivo">
        </div>
        <div>
            <label for="linkProyecto">Link proyecto</label>
            <input required type="text" name="linkProyecto" id="linkProyecto">
        </div>
        <div>
            <label for="linkGithub">Link github</label>
            <input required type="text" name="linkGithub" id="linkGithub">
        </div>
        
        <input type="submit" value="Agregar proyecto">
    </form>
</div>

<div>

<table>
    <h2>MODIFICAR</h2>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>LinkProyecto</th>
            <th>LinkGithub</th>
            <th>Eliminar</th>
            <th>Modificar</th>
        </tr>
    </thead>

    <tbody >
        <?php 
        foreach($proyectos as $proyecto){ ?>
    
        <tr>
            <td><?php echo $proyecto['titulo'];?></td>
            <td><img src="<?php echo '../../assets/img_proyectos/' . $proyecto['img']; ?>" alt="<?php echo $proyecto['titulo']; ?>" class="img"></td>
            <td><?php echo $proyecto['linkProyecto'];?></td>
            <td><?php echo $proyecto['linkGithub'];?></td>
            <td><a name="eliminar" id="eliminar" href="?borrar=<?php echo $proyecto['id'];?>">Eliminar</a></td>
            <td><a name="modificar" id="modificar" href="?modificar=<?php echo $proyecto['id'];?>">Modificar</a></td>
        </tr>

        <?php 
        } ?>

    </tbody>
 
</table>
</div>
</body>
</html>

