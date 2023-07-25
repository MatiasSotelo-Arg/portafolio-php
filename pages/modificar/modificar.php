<?php include '../header/header_admin.php';

if($_GET) {
    if(isset($_GET['modificar'])) {
        $id = $_GET['modificar'];

        $_SESSION['id_proyecto'] = $id;

        $conexion = new conexion();
        $proyecto = $conexion->consultar("SELECT * FROM `proyecto` where id=".$id);
    }
}

if($_POST) {

    $imagen = $conexion->consultar("SELECT img FROM  `proyecto` where id=".$id);
    unlink("../../assets/img_proyectos/".$imagen[0]['img']);

    $id = $_SESSION['id_proyecto'];

    $titulo = $_POST['titulo'];
    $imagen = $_FILES['archivo']['name'];

    $imagen_temporal = $_FILES['archivo']['tmp_name'];
    $fecha = new DateTime();
    $imagen = $fecha->getTimestamp()."_".$imagen;
    move_uploaded_file($imagen_temporal,"../../assets/img_proyectos/".$imagen);

    $linkProyecto = $_POST['linkProyecto'];
    $linkGithub = $_POST['linkGithub'];

    $conexion = new conexion();
    $sql = "UPDATE `proyecto` SET `titulo` = '$titulo' , `img` = '$imagen', `linkProyecto` = '$linkProyecto', `linkGithub` = '$linkGithub' WHERE `proyecto`.`id` = '$id';";
    $id_proyecto = $conexion->ejecutar($sql);

    header("location:../abm/abm.php");
    die();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="modificar.css">
</head>
<body>
<?php foreach($proyecto as $fila) {?>

<div class="contenedor-principal">
    <div>
        <h2>Modificar</h2>
    </div>

    <form action="#" method="post" enctype="multipart/form-data">

        <div>
            <img src="../../assets/img_proyectos/<?php echo $fila['img'];?>" alt="<?php echo $fila['titulo'];?>">           
        </div>

        <div>
            <p>Nueva Imagen</p>
            <input type="file" name="archivo" id="archivo" value="<?php echo $fila['img'];?>"> 
            
        </div>

        <div>
            <label for="titulo">Titulo</label>
            <input required type="text" name="titulo" id="titulo" value="<?php echo $fila['titulo'];?>">
        </div>

        <div>
            <label for="linkProyecto">Link Proyecto</label>
            <input required type="text" name="linkProyecto" id="linkProyecto" value="<?php echo $fila['linkProyecto']?>">
        </div>

        <div>
            <label for="linkGithub">Link Github</label>
            <input required type="text" name="linkGithub" id="linkGithub" value="<?php echo $fila['linkGithub']?>">
        </div>

        <div>
            <input class="submit" type="submit" value="Modificar"> 
        </div>
        

    </form>
</div>

<?php } ?>
</body>
</html>


