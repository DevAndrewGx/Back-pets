<?php
    require_once('../Models/Querys.php');
    require_once('../Models/Conexion.php');

    $consultas = new Querys();
    $Id_pet = $_GET['Id_pet'];
    $messaje = $consultas ->eliminarMascota($Id_pet);
    echo $messaje;
?>