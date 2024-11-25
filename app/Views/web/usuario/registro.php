<?php $this->extend('layout/web') ?>

<?= $this->section('header')?>
    Registro
<?= $this->endSection('header')?>


<?= $this->section('contenido')?>

<?= view('partials/form_error') ?>

<form action="registro_post" method="POST">

<label for="usuario">email</label>
<input type="text" name="usuario" id="usuario" placeholder="Usuario"/>


<label for="email">email</label>
<input type="text" name="email" id="email" placeholder="Email"/>

<label for="contrasena">email</label>
<input type="contrasena" name="contrasena" id="contrasena" placeholder="contrasena"/>

<input type="submit" value="enviar"/>
<?= $this->endSection('contenido')?>