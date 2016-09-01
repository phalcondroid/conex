<style media="screen">
    .btnModal {
        background:none;
        box-shadow:none;
        border:none;
    }
</style>

<div class="" style="width:100%; background:black; height : 70px">
    <div class="container"style="margin-top: 50px;">
        <div class="row" style="margin-top: 15px;">
            <div class="col-md-12">
                <form class="navbar-form" role="search" style="margin-left : -15px">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="glyphicon glyphicon-search"></i>
                        </div>
                        <input type="text" class="form-control"  style="width: 300px" id="exampleInputAmount" placeholder="buscar">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <select class="" name="">
                                <option>Productos</option>
                                <option>Servicios</option>
                                <option>Anuncios</option>
                                <option>Eventos</option>
                            </select>
                        </div>
                    </div>
                    &nbsp;
                    {{ image("img/search.png", "style" : "width : 18px; margin-top : 10px", "class" : "pull-right") }}
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container" style="">

    <div class="row">
        <div class="col-md-12">
            &nbsp;
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 style="margin-top : 3px;">
                                Saber pro para estudiantes nacional 2015
                            </h3>
                            {{ image("img/calendar.png", "style" : "float:right; margin-top : -35px; width : 32px") }}
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <p style="text-align : justify">
                                        Collaboration Lab ‘Juntos por el Agua’ es una iniciativa conjunta de la Red Local de Pacto
                                        Global en Colombia, la plataforma internacional “CEO Water Mandate – Mandato por el Agua”, y
                                        el Pacific Institute (California, Estados Unidos), que se llevará a cabo en Bogotá el 14 de
                                        junio de 2016 en la Universidad EAN (Calle 79 # 11 – 45).
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
                                                        <input type='text' class="form-control" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Horario
                                                </th>
                                                <td>
                                                    8:30 am a 3pm
                                                </td>
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
                                        {{ image("img/agreement.png", "style" : " width : 48px")}}
                                    </button>

                                    {{ image("img/binoculars.png", "style" : "width : 18px")}}
                                    <span class="badge">214</span>

                                    &nbsp;&nbsp;

                                    <button type="button" class="btnModal" data-toggle="modal" data-target="#myModal">
                                        {{ image("img/speech-bubble.png", "style" : "width : 18px")}}
                                        <span class="badge">10</span>
                                    </button>

                                    &nbsp;&nbsp;

                                    {{ image("img/favorite.png", "style" : "width : 18px")}}
                                    <span class="badge">5</span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 style="margin-top : 3px;">
                                Almohadas creativas
                            </h3>
                            {{ image("img/barcode.png", "style" : "float:right; margin-top : -35px; width : 32px") }}
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
                                                {{ image("img/inovatio1.png") }}
                                                <div class="carousel-caption">
                                                Almohada Noel
                                                </div>
                                            </div>
                                            <div class="item">
                                                {{ image("img/inovatio2.jpg") }}
                                                <div class="carousel-caption">
                                                Corchos reutilizables
                                                </div>
                                            </div>
                                            <div class="item">
                                                {{ image("img/inovatio3.jpg") }}
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
                                                {{ image("img/logo2.png", "style" : "width : 80px") }}
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
                                        {{ image("img/agreement.png", "style" : " width : 48px")}}
                                    </button>

                                    {{ image("img/binoculars.png", "style" : "width : 18px")}}
                                    <span class="badge">214</span>

                                    &nbsp;&nbsp;

                                    <button type="button" class="btnModal" data-toggle="modal" data-target="#myModal2">
                                        {{ image("img/speech-bubble.png", "style" : "width : 18px")}}
                                        <span class="badge">10</span>
                                    </button>

                                    &nbsp;&nbsp;

                                    {{ image("img/favorite.png", "style" : "width : 18px")}}
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
                            {{ image("img/cart.png", "style" : "float:right; margin-top : -35px; width : 32px") }}
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
                                                {{ image("http://biclamensajeria.co/img/Logo_Bicla.png") }}
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
                                        {{ image("img/agreement.png", "style" : " width : 48px")}}
                                    </button>

                                    {{ image("img/binoculars.png", "style" : "width : 18px")}}
                                    <span class="badge">214</span>

                                    &nbsp;&nbsp;

                                    {{ image("img/speech-bubble.png", "style" : "width : 18px")}}
                                    <span class="badge">10</span>

                                    &nbsp;&nbsp;

                                    {{ image("img/favorite.png", "style" : "width : 18px")}}
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
                            {{ image("img/truck.png", "style" : "float:right; margin-top : -35px; width : 32px") }}
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
                                                {{ image("img/ex1.jpg") }}
                                                <div class="carousel-caption">
                                                Almohada Noel
                                                </div>
                                            </div>
                                            <div class="item">
                                                {{ image("img/ex2.jpg") }}
                                                <div class="carousel-caption">
                                                Corchos reutilizables
                                                </div>
                                            </div>
                                            <div class="item">
                                                {{ image("img/ex2.jpg") }}
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
                                                {{ image("img/truck.png", "style" : "width : 80px") }}
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
                                        {{ image("img/agreement.png", "style" : " width : 48px")}}
                                    </button>

                                    {{ image("img/binoculars.png", "style" : "width : 18px")}}
                                    <span class="badge">214</span>

                                    &nbsp;&nbsp;

                                    {{ image("img/speech-bubble.png", "style" : "width : 18px")}}
                                    <span class="badge">10</span>

                                    &nbsp;&nbsp;

                                    {{ image("img/favorite.png", "style" : "width : 18px")}}
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
        <button type="button" class="btn btn-success">Confirmar</button>
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

{{ assets.outputJs("deal") }}
<script>

    Pusher.logToConsole = true;

    var pusher = new Pusher('f14f3a3162879b286cd0', {
        encrypted: true
    });

    var channel = pusher.subscribe('test_channel');
    channel.bind('my_event', function(data) {
        alert(data.message);
        console.log(data);
    });

    window.load = function () {
        $(function () {
            $('#datetimepicker1').datetimepicker();
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
