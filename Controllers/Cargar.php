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
                        <a href="show.php? Id_pet='.$fila['Id_pet'].'" class="show"></a>
                        <a href="edit.html" class="edit"></a>
                        <a href="../Controllers/Eliminar.php?Id_pet='.$fila['Id_pet'].'" class="delete"></a>
                    </div>
                </td>
            </tr>
            ';
        }
   }
?>