<?= $this->extend('layout/layout') ?>
<?= $this->section('header') ?>
Listado
<?= $this->endSection('header') ?>


<?= $this->section('contenido') ?>
 
    <div>

        <a href="Categorias/new"> new </a>

       

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>opciones</th>
            </tr>
            
            
            <?php foreach ($Categorias as $key => $c) : ?>
            <tr>
                <td><?= $c['id'] ?> </td>
                <td><?= $c['titulo'] ?> </td>

                <td>
                    <a href="Categorias/edit/ <?= $c['id'] ?>">Editar</a>
                    
                    <a href="Categorias/show/ <?= $c['id'] ?>">Ver</a>
                    <form method="POST" action="Categorias/delete/ <?= $c['id']?>">
                    <button type="submit">Eliminar</button>
                    </form>
                    
                </td>
            </tr>
             <?php endforeach ?>
             </table>
    </div>

    <?= $this->endSection('contenido') ?>