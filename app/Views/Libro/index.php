<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
Listado
<?= $this->endSection('header') ?>


<?= $this->section('contenido') ?>


    <div>
        <a href="Libros/new"> crear </a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>opciones</th>
            </tr>
            
            
            <?php foreach ($Libros as $key => $l) : ?>
            <tr>
                <td><?= $l['id'] ?> </td>
                <td><?= $l['titulo'] ?> </td>
                <td><?= $l['descripcion'] ?> </td>

                <td>
                    <a href="Libros/edit/ <?= $l['id'] ?>">Editar</a>
                   
                    <a href="Libros/show/ <?= $l['id'] ?>">Ver</a>
                    <form method="POST" action="Libros/delete/ <?= $l['id']?>">
                    <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
             <?php endforeach ?>
             </table>
    </div>

    
    <?= $this->endSection('contenido') ?>