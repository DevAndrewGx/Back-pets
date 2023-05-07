<?php
    require_once('../Models/Querys.php');
    require_once('../Models/Conexion.php');

    $mensaje = null;
    $consultas = new Querys();
    $name_pet = $_POST['name'];
    $race = $_POST['race'];
    $category = $_POST['category'];
    $gender = $_POST['gender'];
    $Id_pet = $_POST['Id_pet'];


    // if(strlen($name_pet) > 0 && strlen($race) > 0 && strlen($race) > 0 && strlen($category) > 0  && strlen($gender) > 0) { 
        
        $mensaje = $consultas ->modificarMascota("name_pet", $name_pet, $Id_pet);
        $mensaje = $consultas ->modificarMascota("race_id", $race, $Id_pet);
        $mensaje = $consultas ->modificarMascota("category_id", $category, $Id_pet);
        $mensaje = $consultas ->modificarMascota("gender_id", $gender, $Id_pet);

        echo $mensaje;


        echo '<script>alert("Mascota Actualizada")</script>';

        echo "<script>location.href='../Views/dashboard.php'</script>";
    // }else { 

    // }

?>