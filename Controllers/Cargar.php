<?php 
   function cargar() { 
        $consultas = new Querys();
        $filas = $consultas -> cargarMascotas();

        
        foreach($filas as $fila) {
            echo '    
            <tr>
                <td>
                    <figure class="photo">
                        <img src="imgs/photo-sm-1.svg" alt="">
                    </figure>
                    <div class="info">
                        <h3>'.$fila['name_pet'].'</h3>
                        <h4>'.$fila['name_races'].'</h4>
                    </div>
                    <div class="controls">
                        <a href="show.php" class="show"></a>
                        <a href="edit.html" class="edit"></a>
                        <a href="../Controllers/Eliminar.php?Id_pet='.$fila['Id_pet'].'" class="delete"></a>
                    </div>
                </td>
            </tr>
            ';
        }
   }

   function cargarMascota() {
    $consultas = new Querys();
    $filas = $consultas -> buscarMascota();

        
        foreach($filas as $fila) {
            echo '    
                <figure class="photo-preview">
                <img src="imgs/photo-lg-1.svg" alt="">
            </figure>
            <div>
                <article class="info-name"><p>'.$fila['name_pet'].'</p></article>
                <article class="info-race"><p>'.$fila['name_races'].'</p></article>
                <article class="info-category"><p>'.$fila['name_category'].'</p></article>
                <article class="info-gender"><p>'.$fila['name_genders'].'</p></article>
                <input type="hidden" name="Id_pet" value="'.$Id_pet.'">
            </div>';
        }
    }
?>