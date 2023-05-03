<?php
    class Querys {
        // We create our function to insert pets
       function registrarPet($nombre, $raza, $categoria, $genero, $fecha) {
            // Creamos el objeto de la conexion ya que no se puede hacer nada si no hay alguna conexion
            $objConexion = new Conexion();
            $conexion = $objConexion ->get_conexion();

            // Query

            $insertar = "INSERT INTO pets(name,race_id,category_id,gender_id, date_register) VALUES (:nombre, :raza, :categoria, :genero, :fecha)";

            // preparamos la query 

            // preparamos todo lo necesario para realizar la funcion necesaria
            $statement = $conexion -> prepare($insertar);

            $statement -> bindParam(":nombre",$nombre);
            $statement -> bindParam(":raza",$raza);
            $statement -> bindParam(":categoria",$categoria);
            $statement -> bindParam(":genero",$genero);
            $statement -> bindParam(":fecha",$fecha);

            $statement ->execute();

            echo '<script>alert("Registroso exitoso")</script>';
            echo "<script> location.href='../Views/add.php'</script>";
       }
    }
?>