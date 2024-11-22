<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
crear
<?= $this->endSection('header') ?>


<?= $this->section('contenido') ?>

    <form method="POST" action="create">
    <?= view('Libro/_form',['op'=> 'Crear'])?>

</form>

<?= $this->endSection('contenido') ?>