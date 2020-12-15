<?php 
session_start();
if ($_SESSION["estado"]!="ok") {
    header("location: index.php");   
}
include_once "App/vistas/layout/header.php";
echo "<h1>Hola ".$_SESSION["nombres"]."</h1>";
echo "Usted es un ".$_SESSION["tipo"];
include_once "App/vistas/layout/footer.php";
?>