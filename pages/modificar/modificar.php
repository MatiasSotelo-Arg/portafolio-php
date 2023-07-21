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

<?php foreach($proyecto as $fila) {?>

    <div>
        <h1>Modificar</h1>
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
            <label for="linkGithub">Link Proyecto</label>
            <input required type="text" name="linkGithub" id="linkGithub" value="<?php echo $fila['linkGithub']?>">
        </div>

        <input type="submit" value="Modificar"> 

    </form>

<?php } ?>
