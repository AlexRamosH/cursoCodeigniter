<?= $this->extend('layout/layout') ?>

<?= $this->section('header') ?>
<div class="container mt-4">
    <h1 class="text-center">Editar Libro</h1>
</div>
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>
<div class="container mt-4">
    <?= view('partials/form_error') ?>

    <form method="POST" action="../update/<?= $libros['id']?>">
        <?= view('Libro/_form', ['op' => 'Editar']) ?>
        
    </form>
</div>
<?= $this->endSection('contenido') ?>
