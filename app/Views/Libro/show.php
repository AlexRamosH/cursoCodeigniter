<?= $this->extend('layout/layout') ?>

<?= $this->section('header') ?>
<div class="container mt-4">
    <h1 class="text-center">Mostrar Libro</h1>
</div>
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>
<div class="container mt-4">
    <div class="card">
        <div class="card-body text-center">
            <h1 class="card-title"><?= $libro['titulo'] ?></h1>
            <p class="card-text"><?= $libro['descripcion'] ?></p>
            <p class="card-text"><?= $categoria['titulo'] ?></p>
        </div>
    </div>
</div>
<?= $this->endSection('contenido') ?>
