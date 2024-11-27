<?= $this->extend('layout/layout') ?>

<?= $this->section('header') ?>
<div class="container mt-4">
    <h1 class="text-center">Listado de Libros</h1>
</div>
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>
<div class="container mt-4">
    <div class="d-flex justify-content-center mb-3">
        <a href="Libros/new" class="btn btn-primary">Nuevo</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Categoria</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Libros as $l) : ?>
            <tr>
                <td><?= $l['id'] ?></td>
                <td><?= $l['titulo'] ?></td>
                <td><?= $l['descripcion'] ?></td>
                <td><?= $l['categoria_id']?></td>
                <td>
                    <a href="Libros/edit/<?= $l['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="Libros/show/<?= $l['id'] ?>" class="btn btn-info btn-sm">Ver</a>
                    <form method="POST" action="Libros/delete/<?= $l['id'] ?>" style="display:inline-block;">
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection('contenido') ?>
