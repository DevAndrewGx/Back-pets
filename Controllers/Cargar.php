<?php 
   function cargar() { 
        $consultas = new Querys();
        $filas = $consultas -> cargarMascotas();

        echo "<table>
                <tr>
                    <th>Id_pet</th>
                    <th>Name</th>
                    <th>Raza</th>
                    <th>Categoria</th>
                    <th>Genero</th>
                </tr>";

        foreach ($filas as $fila) { 
            echo "<tr>";
            echo "<td>".$fila['Id_pet']."</td>";
            echo "<td>".$fila['name']."</td>";
            echo "<td>".$fila['name']."</td>";
            echo "<td>".$fila['name']."</td>";
            echo "<td>".$fila['name']."</td>";
            // echo "<td><a href='Controlador/eliminar.php?Id_producto=".$fila['Id_producto']."'>Eliminar</td>";
            // echo "<td><a href='modificar.php?Id_producto=".$fila['Id_producto']."'>Modificar</td>";
            // echo "</tr>";
            "</tr>";
        }
        echo "</table>";
   }
?>