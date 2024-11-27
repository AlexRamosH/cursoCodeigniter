<?= $this->extend('layout/layout') ?>

<?= $this->section('header') ?>
<div class="container mt-4">
    <h1 class="text-center">Crear Libro</h1>
</div>
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>
<div class="container mt-4">
    <?= view('partials/form_error') ?>

    <form method="POST" action="create">
        <?= view('Libro/_form', ['op' => 'Crear']) ?>
        
    </form>
</div>
<?= $this->endSection('contenido') ?>
