<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
editar
<?= $this->endSection('header') ?>


<?= $this->section('contenido') ?>

<?= view('partials/form_error')?>

    <form method="POST" action="../update/<?= $categorias['id']?>">
    <?= view('Categoria/_form',['op'=> 'Atualizar'])?>
</form>

<?= $this->endSection('contenido') ?>