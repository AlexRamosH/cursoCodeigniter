<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
editar
<?= $this->endSection('header') ?>


<?= $this->section('contenido') ?>

    <form method="POST" action="../update/<?= $libros['id']?>">
    <?= view('Libro/_form',['op'=> 'Editar'])?>
</form>


<?= $this->endSection('contenido') ?>