<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Conexión emprendedores</title>
        {{ assets.outputCss("css") }}
        {{ assets.outputJs("config") }}
    </head>
    <body id="page-top">
        {{ flash.output() }}
        {{ content() }}
    </body>
</html>
