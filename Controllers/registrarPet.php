<?php
    // IMPORTAMOS LAS DEPETENDIAS NECESARIAS
    require_once("../Models/Conexion.php");
    require_once("../Models/Querys.php");

        // CAPTURAMOS EN VARIABLES LOS VAORES ENVIADOS DESDE EL FORMULARIO
        // A TRAVES DEL METODO POST Y LOS NAME DE LOS CAMPOS

        $nombre = $_POST['name'];
        $raza = $_POST['raza'];
        $categoria  = $_POST['categoria'];
        $genero = $_POST['genero'];
        $fecha = date("Y-m-d"); 
        // $estado = "Pendiente"; 

    // creamos el objeto apartir de la clase para enviar los argumentos a una funcion especifica 
        $db_consultas = new Querys();
        $result = $db_consultas->registrarPet($nombre, $raza, $categoria, $genero, $fecha)


?>