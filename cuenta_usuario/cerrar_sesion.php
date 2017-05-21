<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    unset($_COOKIE['carrito']);
    header("Location:../index.php?logout");
?>
