<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Conexión emprendedores</title>
        <?= $this->assets->outputCss('css') ?>
        <?= $this->assets->outputJs('config') ?>
    </head>
    <body id="page-top">
        <?= $this->flash->output() ?>
        <?= $this->getContent() ?>
    </body>
</html>
