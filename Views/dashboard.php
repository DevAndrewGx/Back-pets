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
    <title>Tu mejor amigo en casa - Dashboard</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    <main class="dashboard">
        <header>
            <h2>Administrar Mascotas</h2>
            <a href="index.html" class="close"></a>
        </header>
       <a href="add.php" class="add"></a>   
       <table>
           <?php cargar(); ?>
       </table>
    </main>
</body>
</html>