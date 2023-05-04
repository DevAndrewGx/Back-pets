<?php
    require_once('../Models/Querys.php');
    require_once('../Models/Conexion.php');
    require_once('../Controllers/Cargar.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver productos</title>
</head>

<body>
    <h1>Mis productos</h1>

    <div>
        <form action="" method="gedt">
            <input type="text" name="buscar">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <?php
        if(isset($_GET['buscar'])) {
            buscar($_GET['buscar']);
        }else { 
            cargar();
        }
        
     ?>

    <!-- new product -->
    <div><a href="Insert.html">Nuevo Producto</a></div>
</body>

</html>