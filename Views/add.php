<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu mejor amigo en casa - Add</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    <main class="add">
        <header>
            <h2>Adicionar Mascota</h2>
            <a href="dashboard.html" class="back"></a>
            <a href="index.html" class="close"></a>
        </header>
        <figure class="photo-preview">
            <img src="imgs/photo-lg-0.svg" alt="">
        </figure>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Nombre">
            <div class="select">
                <select name="raza">
                    <option value="">Seleccione Raza...</option>
                    <option value="1">Corgi</option>
                    <option value="2">Bulldog</option>
                </select>
            </div>
            <div class="select">
                <select name="raza">
                    <option value="">Seleccione Categoría...</option>
                    <option value="1">Perro</option>
                    <option value="2">Gato</option>
                </select>
            </div>
            <button type="button" class="upload">Subir Foto</button>
            <div class="select">
                <select name="raza">
                    <option value="">Seleccione Genero...</option>
                    <option value="1">Hembra</option>
                    <option value="2">Macho</option>
                </select>
            </div>
            <button class="save">Guardar</button>
        </form>
    </main>
</body>
</html>