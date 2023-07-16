<?php ob_start();
set_error_handler("var_dump");

$ruta_actual = $_SERVER['PHP_SELF'];

if (strpos($ruta_actual, 'index_admin.php') !== false) {
    include 'src/conexion.php';
} elseif (strpos($ruta_actual, 'abm.php') !== false) {
    include '../../src/conexion.php';
}

session_start();

if( isset( $_SESSION['usuario']) != 'Admin') {
    header("location:pages\login\login.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    

    <?php 
    if (strpos($ruta_actual, 'index_admin.php') !== false) {
        echo '<link rel="stylesheet" href="./pages/header/header.css">';
        echo '<link rel="stylesheet" href="css\resets.css">';
    } else if (strpos($ruta_actual, 'abm.php') !== false) {
        echo '<link rel="stylesheet" href="../header/header.css">';
        echo '<link rel="stylesheet" href="../../css\resets.css">';
    }
?>


</head>
<body>
    <header class="contenedor-header"> 

    <nav class="nav">
        <h1 class="titulo">
            <a href="index.php">&lt;MS/&gt; DEV</a>
        </h1>

        <div>
            <ul>
                <li>
                    <a href="#">Proyectos</a>
                </li>
                <li>
                    <a href="pages\abm\abm.php">ABM</a>
                </li>
                <li>
                    <a href="src\cerrar_sesion.php">cerrar sesion: <?php echo $_SESSION['usuario'];?></a>
                </li>
            </ul>
            
        </div>
        
    </nav>
    </header>
</body>
</html>