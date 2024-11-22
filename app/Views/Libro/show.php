<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
mostrar
<?= $this->endSection('header') ?>


<?= $this->section('contenido') ?>
    
<h1><?= $libro['titulo']?></h1>
<p><?= $libro['descripcion']?></p>

<?= $this->endSection('contenido') ?>