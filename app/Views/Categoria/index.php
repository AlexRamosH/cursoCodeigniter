<?= $this->extend('layout/layout') ?>

<?= $this->section('header') ?>
<div class="container mt-4">
    <h1 class="text-center">Listado de Categorías</h1>
</div>
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>
<div class="container mt-4">
    <div class="d-flex justify-content-center mb-3">
        <a href="Categorias/new" class="btn btn-primary">Nuevo</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Categorias as $c) : ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['titulo'] ?></td>
                <td>
                    <a href="Categorias/edit/<?= $c['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="Categorias/show/<?= $c['id'] ?>" class="btn btn-info btn-sm">Ver</a>
                    <form method="POST" action="Categorias/delete/<?= $c['id'] ?>" style="display:inline-block;">
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection('contenido') ?>
