<style media="screen">
    .btnModal {
        background:none;
        box-shadow:none;
        border:none;
    }
</style>

<?= $this->getContent() ?>

<div class="container" style="">

    <div class="row">
        <div class="col-md-12">
            &nbsp;
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">

            <div class="row">

                <?php foreach ($events as $item) { ?>

                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 style="margin-top : 3px;">
                                <?= $item->name ?>
                            </h3>
                            <?= $this->tag->image(['img/calendar.png', 'style' => 'float:right; margin-top : -35px; width : 32px']) ?>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <p style="text-align : justify">
                                        <?= $item->description ?>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div id="map" style="width : 400px; height : 300px">

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    Fecha
                                                </th>
                                                <td>
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='text' class="form-control" value="<?= $item->start_date ?>"/>
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <?= $item->finish_date ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Invitados
                                                </th>
                                                <td>
                                                    <ul>
                                                        <li>Andrés Gutierrez</li>
                                                        <li>Andrés barreto</li>
                                                        <li>Alex torrenegra</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Organizador
                                                </th>
                                                <td>
                                                    Universidad EAN
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Página web
                                                </th>
                                                <td>
                                                    www.eanconex.com
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Contácto
                                                </th>
                                                <td>
                                                    3012735668
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Dirección
                                                </th>
                                                <td>
                                                    <?= $item->address ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" style="text-align : right">

                                    <button type="button" data-toggle="modal" data-target="#myModal3" class="btnModal btn btn-default" style="float:left;">
                                        <?= $this->tag->image(['img/agreement.png', 'style' => ' width : 48px']) ?>
                                    </button>

                                    <?= $this->tag->image(['img/binoculars.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">214</span>

                                    &nbsp;&nbsp;

                                    <button type="button" class="btnModal" data-toggle="modal" data-target="#myModal">
                                        <?= $this->tag->image(['img/speech-bubble.png', 'style' => 'width : 18px']) ?>
                                        <span class="badge">10</span>
                                    </button>

                                    &nbsp;&nbsp;

                                    <?= $this->tag->image(['img/favorite.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">5</span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 style="margin-top : 3px;">
                                Almohadas creativas
                            </h3>
                            <?= $this->tag->image(['img/barcode.png', 'style' => 'float:right; margin-top : -35px; width : 32px']) ?>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <p style="text-align : justify">
                                        Continuamos buscando esos nuevos productos innovadores quizás algo desconocidos para el público general. Aunque cada vez cuesta más trabajo continuar innovando, lo cierto es que nos seguimos sorprendiendo de las originales ideas de estos inventores y emprendedores. La sección de hoy, como podréis observar, es muy variada en cuanto a productos y utilidades.
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <?= $this->tag->image(['img/inovatio1.png']) ?>
                                                <div class="carousel-caption">
                                                Almohada Noel
                                                </div>
                                            </div>
                                            <div class="item">
                                                <?= $this->tag->image(['img/inovatio2.jpg']) ?>
                                                <div class="carousel-caption">
                                                Corchos reutilizables
                                                </div>
                                            </div>
                                            <div class="item">
                                                <?= $this->tag->image(['img/inovatio3.jpg']) ?>
                                                <div class="carousel-caption">
                                                Tostada pad
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <table class="table">
                                        <thead>
                                            <th>
                                                <?= $this->tag->image(['img/logo2.png', 'style' => 'width : 80px']) ?>
                                            </th>
                                            <td>
                                                <p style="text-align : middle;">Universidad EAN</p>
                                            </td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    Inventario
                                                </th>
                                                <td>
                                                    Por demanda
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Colores
                                                </th>
                                                <td>
                                                    <ul>
                                                        <li>Azul</li>
                                                        <li>Rojo</li>
                                                        <li>Negro</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Página web
                                                </th>
                                                <td>
                                                    www.eanconex.com
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Contácto
                                                </th>
                                                <td>
                                                    3012735668
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Dirección
                                                </th>
                                                <td>
                                                    Calle 79 # 11 - 45
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" style="text-align : right">

                                    <button type="button" data-toggle="modal" data-target="#myModal3" class="btnModal btn btn-default" style="float:left;">
                                        <?= $this->tag->image(['img/agreement.png', 'style' => ' width : 48px']) ?>
                                    </button>

                                    <?= $this->tag->image(['img/binoculars.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">214</span>

                                    &nbsp;&nbsp;

                                    <button type="button" class="btnModal" data-toggle="modal" data-target="#myModal2">
                                        <?= $this->tag->image(['img/speech-bubble.png', 'style' => 'width : 18px']) ?>
                                        <span class="badge">10</span>
                                    </button>

                                    &nbsp;&nbsp;

                                    <?= $this->tag->image(['img/favorite.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">5</span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3 style="margin-top : 3px;">
                                Servicio de mensajería GPS
                            </h3>
                            <?= $this->tag->image(['img/cart.png', 'style' => 'float:right; margin-top : -35px; width : 32px']) ?>
                        </div>

                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <p style="text-align : justify">
                                        Nuestra sólida experiencia nos permite ofrecer soluciones de Tecnologías de Información a
                                        empresas de diversos sectores e industrias, en las áreas de:
                                        Integración de profesionales especializados en Tecnologías de Información y Procesos
                                        de Negocio (Staffing).
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <table class="table">
                                        <thead>
                                            <th>
                                                <?= $this->tag->image(['http://biclamensajeria.co/img/Logo_Bicla.png']) ?>
                                            </th>
                                            <td>

                                            </td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    Fecha de publicación
                                                </th>
                                                <td>
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='text' class="form-control" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Aplicación GPS
                                                </th>
                                                <td>
                                                    Android y IOS
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Valor de servicio mínimo
                                                </th>
                                                <td>
                                                    <ul>
                                                        <li>5000 &nbsp;$</li>
                                                        <li>10000 $</li>
                                                        <li>15000 $</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Mensajería en tiempo
                                                </th>
                                                <td>
                                                    Real
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Paquetes
                                                </th>
                                                <td>
                                                    15 kg
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Documentos
                                                </th>
                                                <td>
                                                    2 kg
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-4">
                                    <div id="map2" style="width : 230px; height : 420px">

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12" style="text-align : right">

                                    <button type="button" data-toggle="modal" data-target="#myModal3" class="btnModal btn btn-default" style="float:left;">
                                        <?= $this->tag->image(['img/agreement.png', 'style' => ' width : 48px']) ?>
                                    </button>

                                    <?= $this->tag->image(['img/binoculars.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">214</span>

                                    &nbsp;&nbsp;

                                    <?= $this->tag->image(['img/speech-bubble.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">10</span>

                                    &nbsp;&nbsp;

                                    <?= $this->tag->image(['img/favorite.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">5</span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-warning">

                        <div class="panel-heading">
                            <h3 style="margin-top : 3px;">
                                Paquete turistico - Go Colombia
                            </h3>
                            <?= $this->tag->image(['img/truck.png', 'style' => 'float:right; margin-top : -35px; width : 32px']) ?>
                        </div>

                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <p style="text-align : justify">
                                        Continuamos buscando esos nuevos productos innovadores quizás algo desconocidos para el público general. Aunque cada vez cuesta más trabajo continuar innovando, lo cierto es que nos seguimos sorprendiendo de las originales ideas de estos inventores y emprendedores. La sección de hoy, como podréis observar, es muy variada en cuanto a productos y utilidades.
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <?= $this->tag->image(['img/ex1.jpg']) ?>
                                                <div class="carousel-caption">
                                                Almohada Noel
                                                </div>
                                            </div>
                                            <div class="item">
                                                <?= $this->tag->image(['img/ex2.jpg']) ?>
                                                <div class="carousel-caption">
                                                Corchos reutilizables
                                                </div>
                                            </div>
                                            <div class="item">
                                                <?= $this->tag->image(['img/ex2.jpg']) ?>
                                                <div class="carousel-caption">
                                                Tostada pad
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <table class="table">
                                        <thead>
                                            <th colspan="2">
                                                <?= $this->tag->image(['img/truck.png', 'style' => 'width : 80px']) ?>
                                            </th>
                                            <td colspan="2">
                                                <p style="text-align : middle;">Go Colombia</p>
                                            </td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    Paquete
                                                </th>
                                                <th>
                                                    Personas
                                                </th>
                                                <th>
                                                    Horario
                                                </th>
                                                <th>
                                                    Días Hábiles
                                                </th>
                                                <th>
                                                    Precio
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2 Días
                                                </td>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    6am - 12pm
                                                </td>
                                                <td>
                                                    S - D
                                                </td>
                                                <td>
                                                    120 . 000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2 Días
                                                </td>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    6am - 12pm
                                                </td>
                                                <td>
                                                    S - D
                                                </td>
                                                <td>
                                                    120 . 000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2 Días
                                                </td>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    6am - 12pm
                                                </td>
                                                <td>
                                                    S - D
                                                </td>
                                                <td>
                                                    120 . 000
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" style="text-align : right">

                                    <button type="button" data-toggle="modal" data-target="#myModal3" class="btnModal btn btn-default" style="float:left;">
                                        <?= $this->tag->image(['img/agreement.png', 'style' => ' width : 48px']) ?>
                                    </button>

                                    <?= $this->tag->image(['img/binoculars.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">214</span>

                                    &nbsp;&nbsp;

                                    <?= $this->tag->image(['img/speech-bubble.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">10</span>

                                    &nbsp;&nbsp;

                                    <?= $this->tag->image(['img/favorite.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">5</span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a class="twitter-timeline" href="https://twitter.com/phalcondroid">Tweets by phalcondroid</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Confirmar acuerdo comercial</h4>
      </div>
      <div class="modal-body">
        <textarea name="name" rows="8" cols="40" style="width : 100%;">Escribe un mensaje</textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" id="btnAggrement">Confirmar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Confirmar asistencia</h4>
      </div>
      <div class="modal-body">
        <textarea name="name" rows="8" cols="40" style="width : 100%;">Escribe un mensaje</textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Confirmar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmar acuerdo comercial</h4>
      </div>
      <div class="modal-body">
        <textarea name="name" rows="8" cols="40" style="width : 100%;">Escribe un mensaje</textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Confirmar Acuerdo</button>
      </div>
    </div>
  </div>
</div>

<?= $this->assets->outputJs('deal') ?>
<script>

    Pusher.logToConsole = true;

    var pusher = new Pusher('f14f3a3162879b286cd0', {
        encrypted: true
    });

    var channel = pusher.subscribe('test_channel');
    channel.bind('agreement', function(data) {
        $(function () {
            $("#aggrementsBadge").html(
                parseInt($("#aggrementsBadge").html()) + 1
            );
        });
    });

    channel.bind('notice', function(data) {
        $(function () {
            console.log($("#noticeBadge").html());
            $("#noticeBadge").html(
                parseInt($("#noticeBadge").html()) + 1
            );
        });
    });

    channel.bind('message', function(data) {
        $(function () {
            $("#messageBadge").html(
                parseInt($("#messageBadge").html()) + 1
            );
        });
    });

    window.load = function () {
        $(function () {
            $('#datetimepicker1').datetimepicker();

            $("#btnAggrement").click(function() {
                $.ajax({
                    "url" : "<?= $this->url->get('deal/pusher') ?>",
                });
            });
        });
    };

    function initMap() {

        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });

        var mapDiv2 = document.getElementById('map2');
        var map2 = new google.maps.Map(mapDiv2, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
