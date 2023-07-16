<?php session_start();
    session_destroy();
    header("location:../pages/login/login.php");
    die();

?>