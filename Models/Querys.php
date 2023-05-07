<?php
    class Querys {
        // We create our function to insert pets
       function registrarPet($nombre, $raza, $categoria, $genero, $fecha) {
            // Creamos el objeto de la conexion ya que no se puede hacer nada si no hay alguna conexion
            $objConexion = new Conexion();
            $conexion = $objConexion ->get_conexion();

            // Query

            $insertar = "INSERT INTO pets(name_pet,race_id,category_id,gender_id, date_register) VALUES (:nombre, :raza, :categoria, :genero, :fecha)";

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

            $leer = "SELECT pets.Id_pet, pets.name_pet, races.name_races  FROM pets JOIN races ON pets.race_id = races.race_id;
";

            $statement = $conexion -> prepare($leer);
            $statement -> execute ();

            while($response = $statement->fetch()) {
                $rows[] = $response;
            }

            return $rows;
       }

       function buscarMascota($Id_pet) {
            $rows = null;
            $objConexion = new Conexion();
            $conexion = $objConexion ->get_conexion();

            $leer = "SELECT pets.name_pet, races.name_races, category.name_category, genders.name_genders FROM pets JOIN races on pets.race_id = races.race_id JOIN category on pets.category_id = category.category_id JOIN genders on pets.gender_id = genders.gender_id WHERE pets.Id_pet = :Id_pet;";

            $statement = $conexion -> prepare($leer);
            $statement ->bindParam(':Id_pet',$Id_pet);
            $statement -> execute();

            while($response = $statement->fetch()) {
                $rows[] = $response;
            }


            return $rows;
        }

        function eliminarMascota($Id_pet) {
            $objConexion = new  Conexion();
            $conexion = $objConexion -> get_conexion(); 

            $eliminar = "DELETE FROM pets where Id_pet = :Id_pet";

            $statement = $conexion -> prepare($eliminar);
            $statement -> bindParam(':Id_pet',$Id_pet);

            
            if(!$statement) { 
                echo '<script>alert("Error no se puede eliminar la mascota")</script>';
            }else { 
                $statement ->execute();
                echo '<script>alert("Mascota eliminada")</script>';

                echo "<script>location.href='../Views/dashboard.php'</script>";
            }
        }

        function modificarMascota($campo, $valor, $Id_pet) { 
            
            // Creamos el objeto conexion
            $objConexion = new Conexion();
            $conexion = $objConexion -> get_conexion();

            // consulta

            $modificar = "UPDATE pets SET $campo = :valor WHERE Id_pet = :Id_pet";

            $statement = $conexion -> prepare($modificar);
            $statement ->bindParam(":valor",$valor);
            $statement -> bindParam(":Id_pet",$Id_pet);


            $statement->execute();
            return "Mascota Actualizada";
        }
    }

?>