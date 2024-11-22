    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo" value="<?= old('titulo',$libros['titulo'])?>"/>
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion" value="<?= old('descripcion',$libros['descripcion'])?>"/>
    <input type="submit" value="<?= $op?>"/>
   