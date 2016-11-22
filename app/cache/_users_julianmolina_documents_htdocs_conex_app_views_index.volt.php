<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Conexión emprendedores</title>

        <?= $this->assets->outputJs('config') ?>
        <?= $this->assets->outputCss('css') ?>
        <?= $this->assets->outputCss('font') ?>

        <?= $this->assets->outputCss('config') ?>

    </head>
    <?= $this->flash->output() ?>
    <?= $this->getContent() ?>
</html>
