<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imágenes</title>
</head>
<body>
    <h1>Subir una imagen</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <br><br>
        <input type="submit" value="Subir imagen">
    </form>

    <br>
    <a href="list_images.php">Ver todas las imágenes subidas</a>
</body>
</html>
