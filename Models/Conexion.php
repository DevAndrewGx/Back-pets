<?php
    // we're going to create a class for the conexion
    class Conexion {
        // we return the conexion
        function get_conexion() {
            // We are going to create the variables for the conexion
            $user = "root";
            $password = "";
            $host = "localhost";
            $db = "petfinder";
            
            // We create a new instance for PDO is the conexion
            $conexion = new PDO("mysql:host=$host;dbname=$db;",$user, $password);

            // Return conexion
            return $conexion;
            // We validate the conexion on DataBase
            
        }
    }
?>