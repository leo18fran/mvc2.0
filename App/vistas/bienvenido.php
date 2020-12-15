<?php

if($_SESSION["estado"]!="ok"){
    header("location: index.php");
}
include_once "layout/header.php";
echo "<h1>Hola ".$_SESSION["nombres"]."</h1>";
echo "Bienvenido usted es un ".$_SESSION["tipo"];
include_once "app/vistas/layout/footer.php";