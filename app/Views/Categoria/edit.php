<?= $this->extend('layout/layout') ?>

<?= $this->section('header') ?>
<div class="container mt-4">
    <h1 class="text-center">Editar Categoría</h1>
</div>
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>
<div class="container mt-4">
    <?= view('partials/form_error') ?>

    <form method="POST" action="../update/<?= $categorias['id']?>">
        <?= view('Categoria/_form', ['op' => 'Actualizar']) ?>
        
        
    </form>
</div>
<?= $this->endSection('contenido') ?>
