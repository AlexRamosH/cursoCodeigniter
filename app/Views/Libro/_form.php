<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" name="titulo" id="titulo" value="<?= old('titulo', $libros['titulo']) ?>">
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?= old('descripcion', $libros['descripcion']) ?>">
</div>
<div class="form-group">
    <label for="categoria_id">categorias</label>
    <select name="categoria_id" id="categoria_id">
                <option></option>
                <?php foreach ($categorias as $c) : ?>
                <option value="<?= $c['id']?>" <?= $c['id'] == old('categoria_id', $libros['categoria_id']) ? 'selected':'' ?>><?= $c['titulo'] ?></option>
                    <?php endforeach?>
            </select>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary"><?= $op ?></button>
</div>
