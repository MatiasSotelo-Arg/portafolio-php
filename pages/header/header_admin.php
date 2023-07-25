<?php ob_start();
set_error_handler("var_dump");

$ruta_actual = $_SERVER['PHP_SELF'];

if (strpos($ruta_actual, 'index_admin.php') !== false) {
    include 'src/conexion.php';
} else if (strpos($ruta_actual, 'abm.php') !== false) {
    include '../../src/conexion.php';
} else if (strpos($ruta_actual, 'modificar.php') !== false) {
    include '../../src/conexion.php';
}

session_start();

if( isset( $_SESSION['usuario']) != 'Admin') {
    header("location:pages/login/login.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="header.css">

    <?php 
    if (strpos($ruta_actual, 'index_admin.php') !== false) {
        echo '<link rel="stylesheet" href="./pages/header/header.css">';
        echo '<link rel="stylesheet" href="css/resets.css">';
    } else if (strpos($ruta_actual, 'abm.php') !== false) {
        echo '<link rel="stylesheet" href="../header/header.css">';
        echo '<link rel="stylesheet" href="../../css/resets.css">';
    } else if (strpos($ruta_actual,'modificar.php') !== false) {
        echo '<link rel="stylesheet" href="../header/header.css">';
        echo '<link rel="stylesheet" href="../../css/resets.css">';
    }
?>

<?php
    if(strpos($ruta_actual, 'index_admin.php') !== false) {
        $linkAdm = 'pages/abm/abm.php';
        $linkProyectos = '#';
        $linkSesion = 'src/cerrar_sesion.php';
        $linkTitulo = 'index.php';
    } else if(strpos($ruta_actual, 'abm.php') !== false || strpos($ruta_actual, 'modificar.php') !== false ) {
        $linkAdm = '#';
        $linkProyectos = '../../index_admin.php';
        $linkSesion = '../../src/cerrar_sesion.php';
        $linkTitulo = '../../index.php';
    } 
?>

</head>
<body>

    <header class="contenedor-header"> 

    <nav class="nav">
        <h1 class="titulo">
            <a href=" <?php echo $linkTitulo ?> " target="_blank">&lt;MS/&gt; DEV</a>
        </h1>

        <div>
            <ul>
                <li>
                    <a href="<?php echo $linkProyectos ?>">Proyectos</a>
                </li>
                <li>
                    <a href="<?php echo $linkAdm ?>">ABM</a>
                </li>
                <li>
                    <a href="<?php echo $linkSesion ?>">cerrar sesion: <?php echo $_SESSION['usuario'];?></a>
                </li>
            </ul>
            
        </div>
        
    </nav>
    </header>
</body>
</html>