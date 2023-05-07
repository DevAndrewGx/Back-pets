<?php 
    function seleccionar() { 
        $consultas = new Querys();
        $Id_pet = $_GET['Id_pet'];
        $filas = $consultas -> buscarMascota($Id_pet);

        foreach($filas as $fila) {
            echo ' 
            <form action="../Controllers/Modificar.php" method="post">
                <input type="text" name="name" placeholder="Nombre" value="'.$fila['name_pet'].'">
                <div class="select">
                <select name="race">
                    <option value="">Seleccione Raza...</option>
                    <option value="1">Corgi</option>
                    <option value="2" selected>Bulldog</option>
                </select>
            </div>
                <div class="select">
                <select name="category">
                    <option value="">Seleccione Categoría...</option>
                    <option value="1" selected>Perro</option>
                    <option value="2">Gato</option>
                </select>
            </div>
                <button type="button" class="upload">Subir Foto</button>
                <div class="select">
                <select name="gender">
                    <option value="">Seleccione Genero...</option>
                    <option value="1">Hembra</option>
                    <option value="2" selected>Macho</option>
                </select>
            </div>
                <input type="hidden" name="Id_pet" value="'.$Id_pet.'">
                <button type="submit"  class="update">Modificar</button>
        </form> 
            
        ';
        }
    }
?>