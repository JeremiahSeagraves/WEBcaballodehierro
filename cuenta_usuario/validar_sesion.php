<?php
session_start();
if(! isset($_SESSION["registrado"])){
    header ("Location: index.php?status=1");
}
?>
