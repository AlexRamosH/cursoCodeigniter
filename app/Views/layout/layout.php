<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
    <h1><?= $this->renderSection('header')?></h1>

    <?=  view('partials/session')?>


    <?= $this->renderSection('contenido')?>
</body>
</html>