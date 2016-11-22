<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Conexión emprendedores</title>

        {{ assets.outputJs("config") }}
        {{ assets.outputCss("css") }}
        {{ assets.outputCss("font") }}

        {{ assets.outputCss("config") }}

    </head>
    {{ flash.output() }}
    {{ content() }}
</html>
