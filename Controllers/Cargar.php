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
                        <h4>'.$fila['name'].'</h4>
                    </div>
                    <div class="controls">
                        <a href="show.php" class="show"></a>
                        <a href="edit.html" class="edit"></a>
                        <a href="../Controllers/" class="delete"></a>
                    </div>
                </td>
            </tr>';
        }
   }

   function cargarMascota() {
    $consultas = new Querys();
    $filas = $consultas -> buscarMascota();

    
    foreach($filas as $fila) {
        echo '    
            <!-- <figure class="photo-preview">
            <img src="imgs/photo-lg-1.svg" alt="">
        </figure>
        <div>
            <article class="info-name"><p>'.$filas['name_pet'].'</p></article>
            <article class="info-race"><p>Bulldog</p>'.$filas['name'].'</article>
            <article class="info-category"><p>Perro</p>'.$filas['name'].'</article>
            <article class="info-gender"><p>Macho</p>'.$filas['name'].'</article>
        </div>';
    }
   }
?>