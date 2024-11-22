<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
editar
<?= $this->endSection('header') ?>


<?= $this->section('contenido') ?>


    <form method="POST" action="../update/<?= $categorias['id']?>">
    <?= view('Categoria/_form',['op'=> 'Atualizar'])?>
</form>

<?= $this->endSection('contenido') ?>