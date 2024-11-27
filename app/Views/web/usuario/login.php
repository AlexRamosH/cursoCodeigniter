<?= $this->extend('layout/web') ?>

<?= $this->section('header') ?>
<div class="container mt-4">
    <h1 class="text-center">Login</h1>
</div>
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>
<div class="container mt-4">
    <?= view('partials/form_error') ?>

    <form action="login_post" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= old('email') ?>">
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
<?= $this->endSection('contenido') ?>
