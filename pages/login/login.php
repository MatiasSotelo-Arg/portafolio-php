<?php ob_start();
session_start();
    
if($_POST) {
    if( ($_POST['email']=="admin") && ($_POST['password']=='kpo' ) ) {
        $_SESSION['usuario']="Admin";
        $_SESSION['logueado']='S';
    
        header("location:/portafolio_php/index_admin.php");
        // header("location:/index_admin.php");
        die();
    } else {
        echo '<script> alert("Usuario y/o Contraseña incorrecta"); </script>';
        header("location:../../index.php");
        die();
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="cont-login">
        <h1>Login</h1>

        <div class="cont-form">
            <form action="login.php" method="post">
                <input type="text" name="email" id="email" placeholder="Usuario">
                <input type="password" name="password" id="password" placeholder="Contraseña">
                <input type="submit" value="iniciar sesion" class="submit">
            </form>
        </div>
        
    </div>
</body>
</html>