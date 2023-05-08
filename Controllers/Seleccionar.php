<?php 
    function seleccionar() { 
        $consultas = new Querys();
        $Id_pet = $_GET['Id_pet'];
        $filas = $consultas -> buscarMascota($Id_pet);
        $datos = $consultas -> cargarPet($Id_pet);
   


        foreach($filas as $fila) {
            echo ' 
            <form action="../Controllers/Modificar.php" method="post">
                <input type="text" name="name" placeholder="Nombre" value="'.$fila['name_pet'].'">
                ';
            foreach($datos as $dato) {

                //Tomamos los datos de la tabla para comparar y pues traer la info en raza
                if($dato['race_id'] == 1) {
                 echo '
                    <div class="select">
                        <select name="race">
                            <option value="">Seleccione Raza...</option>
                            <option value="1"selected >Corgi</option>
                            <option value="2">Bulldog</option>
                        </select>
                    </div>';
                }else {
                echo
                    '<div class="select">
                        <select name="race">
                            <option value="">Seleccione Raza...</option>
                            <option value="1">Corgi</option>
                            <option value="2" selected >Bulldog</option>
                        </select>
                    </div>';  
                }

                //Tomamos los datos de la tabla para comparar y pues traer la info en categoria
                if($dato['category_id'] == 1) {
                 echo '
                    <div class="select">
                        <select name="category">
                            <option value="">Seleccione Categoría...</option>
                            <option value="1" selected>Perro</option>
                            <option value="2">Gato</option>
                        </select>
                    </div>';
                }else {
                    echo
                    '<div class="select">
                        <select name="category">
                            <option value="">Seleccione Categoría...</option>
                            <option value="1" >Perro</option>
                            <option value="2" selected>Gato</option>
                        </select>
                    </div>';  
                }
                echo '
                <button type="button" class="upload">Subir Foto</button>';

                //Tomamos los datos de la tabla para comparar y pues traer la info en genero
                if($dato['gender_id'] == 1) {
                 echo '
                    <div class="select">
                        <select name="gender">
                            <option value="">Seleccione Genero...</option>
                            <option value="1" selected>Hembra</option>
                            <option value="2">Macho</option>
                        </select>
                    </div>';
                }else {
                    echo
                    '<div class="select">
                        <select name="gender">
                            <option value="">Seleccione Genero...</option>
                            <option value="1" >Hembra</option>
                            <option value="2" selected>Macho</option>
                        </select>
                    </div>';  
                }
            

            echo '
                <input type="hidden" name="Id_pet" value="'.$Id_pet.'">
                <button type="submit"  class="update">Modificar</button>
            </form>';
            }
        }
    }
?>