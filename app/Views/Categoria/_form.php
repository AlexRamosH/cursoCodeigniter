<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" name="titulo" id="titulo" value="<?= old('titulo', $categorias['titulo']) ?>">
</div>
<div class="form-group mt-3">
    <button type="submit" class="btn btn-primary"><?= $op ?></button>
</div>
