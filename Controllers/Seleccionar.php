<?php 
    function cargarMascota() {
        $consultas = new Querys();
        $Id_pet = $_GET['Id_pet'];
        $filas = $consultas -> buscarMascota($Id_pet);

        
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
                <input type="hidden" name="Id_pet">
            </div>';
        }
    }
?>