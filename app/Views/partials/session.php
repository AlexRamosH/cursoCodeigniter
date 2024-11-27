<?php if(session('mensaje')) : ?>
    <div class="alert alert-info mt-3">
        <?= session('mensaje') ?>
    </div>
    <br>
<?php endif ?>
