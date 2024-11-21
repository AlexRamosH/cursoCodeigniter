<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado</h1>
    <div>
        <a href="Categorias/new"> new </a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>opciones</th>
            </tr>
            
            
            <?php foreach ($Categorias as $key => $c) : ?>
            <tr>
                <td><?= $c['id'] ?> </td>
                <td><?= $c['titulo'] ?> </td>

                <td>
                    <a href="Categorias/edit/ <?= $c['id'] ?>">Editar</a>
                    
                    <a href="Categorias/show/ <?= $c['id'] ?>">Ver</a>
                    <form method="POST" action="Categorias/delete/ <?= $c['id']?>">
                    <button type="submit">Eliminar</button>
                    </form>
                    
                </td>
            </tr>
             <?php endforeach ?>
             </table>
    </div>
</body>
</html>