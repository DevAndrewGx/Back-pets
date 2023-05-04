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

       // Realizamos la consulta para traer datos

       function cargarMascotas() { 
            $rows = null;
            $objConexion = new Conexion();
            $conexion = $objConexion ->get_conexion();

            $leer = "SELECT pets.name, races.name AS race, category.name AS category, genders.name AS genders FROM pets JOIN races ON pets.race_id = races.race_id JOIN category ON pets.category_id = category.category_id JOIN genders ON pets.gender_id = genders.gender_id;
";

            $statement = $conexion -> prepare($leer);
            $statement -> execute ();

            while($response = $statement->fetch()) {
                $rows[] = $response;
            }

            return $rows;
       }
    }
?>