<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
</head>
<body>
    <form method="POST" action="../update/<?= $libros['id']?>">
    <?= view('Libro/_form',['op'=> 'Editar'])?>
</form>
</body>
</html>