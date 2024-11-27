<?php if(session('validation')) : ?>
<div class="alert alert-danger mt-3">
    <?= session('validation')->listErrors() ?>
</div>
<br>
<?php endif ?>
