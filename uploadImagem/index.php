<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de imagem</title>
</head>
<body>
    <h2>Faça o upload de uma imagem</h2>
    <form action="imagem.php" method="post" enctype="multipart/form-data">
        <label>Foto de perfil</label><br><br>
        <input type="file" name="imagem" accept="image/png,image/jpg,image/jpeg"><br><br>
        <button type="submit">Enviar imagem</button>
    </form>
</body>
</html>