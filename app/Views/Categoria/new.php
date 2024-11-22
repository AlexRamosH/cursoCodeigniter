<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
crear
<?= $this->endSection('header') ?>


<?= $this->section('contenido') ?>
<?= view('partials/form_error')?>

    <form method="POST" action="create">
    <?= view('Categoria/_form',['op'=> 'Crear'])?>
</form>


<?= $this->endSection('contenido') ?>