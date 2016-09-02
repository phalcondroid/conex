<style media="screen">
    .label-pill {
        padding-right: .6em;
        padding-left: .6em;
        border-radius: 10rem;
    }
    .trunk {
        overflow : hidden;
        white-space : nowrap;
        text-overflow: ellipsis;
        margin-top: 30px;
        height: 40px;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist" style="margin-top : 15px">
            <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                    Productos
                    &nbsp;
                    <span class="label label-pill label-success">
                        {{ cProducts }}
                    </span>
                </a>
            </li>
            <li role="presentation">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                    Eventos
                    &nbsp;
                    <span class="label label-pill label-danger">
                        {{ cEvents }}
                    </span>
                </a>
            </li>
            <li role="presentation">
                <a href="#vacancy" aria-controls="messages" role="tab" data-toggle="tab">
                    Anuncios
                    &nbsp;
                    <span class="label label-pill label-warning">
                        {{ cAdvertisement }}
                    </span>
                </a>
            </li>
            <li role="presentation">
                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                    Servicios
                    &nbsp;
                    <span class="label label-pill label-primary">
                        {{ cServices }}
                    </span>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">

                <div class="row" style="margin-top : 10px;">
                    <div class="col-md-12">
                        <a href="{{ url("services/createProduct") }}" class="btn btn-default pull-right">
                            {{ image("img/barcode.png", "style" : "height : 24px;") }}
                            Nuevo producto
                        </a>
                    </div>
                </div>

                <div class="row" style="margin-top : 10px;">
                    {% for item in products %}
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                {{ image("img/inovatio1.png", "style" : "widht : 400px; height : 350px") }}
                                <div class="caption">
                                    <h3>
                                        {{ item.name }}
                                    </h3>
                                    <p class="trunk">
                                        {{ item.description }}
                                    </p>
                                    <p>
                                        <a href="{{ url("services/editProduct") }}" class="btn btn-warning" role="button">
                                              <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        <a href="{{ url("services/deleteProduct") }}" class="btn btn-danger" role="button">
                                              <i class="glyphicon glyphicon-trash"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>

            </div>
            <div role="tabpanel" class="tab-pane" id="profile">

                <div class="row" style="margin-top : 10px;">
                    <div class="col-md-12">
                        <a href="{{ url("services/createEvent") }}" class="btn btn-default pull-right">
                            {{ image("img/calendar.png", "style" : "height : 24px;") }}
                            Nuevo evento
                        </a>
                    </div>
                </div>

                <div class="row" style="margin-top : 10px;">

                    {% for item in events %}
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <div style="width : 100%; height : 300px" id="mapEvent1">

                                </div>
                                <div class="caption">
                                  <h3>
                                      {{ item.name }}
                                  </h3>
                                  <p class="trunk">
                                    {{ item.description }}
                                  </p>
                                  <p >
                                      <a href="{{ url("services/editEvent") }}" class="btn btn-warning" role="button">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                      </a>
                                      <a href="{{ url("services/deleteEvent") }}" class="btn btn-danger" role="button">
                                            <i class="glyphicon glyphicon-trash"></i>
                                      </a>
                                  </p>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="vacancy">

                <div class="row" style="margin-top : 10px;">
                    <div class="col-md-12">
                        <a href="{{ url("services/createAdvertisement") }}" class="btn btn-default pull-right">
                            {{ image("img/cart.png", "style" : "height : 24px;") }}
                            Crear anuncio
                        </a>
                    </div>
                </div>

                <div class="row" style="margin-top : 10px;">
                    {% for item in advertisement %}
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <div class="caption">
                            <h3>
                                {{ item.name }}
                            </h3>
                          </div>
                        <div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>
                                            Características
                                        </th>
                                        <td>
                                            <ul>
                                                {% for character in advertisementCharacter %}
                                                    <li>{{ character.title }}</li>
                                                {% endfor %}
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Fecha de publicación
                                        </th>
                                        <td>
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" value="{{ item.publish_date }}" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Valor
                                        </th>
                                        <td>
                                            <span class="label label-success">4.000.000</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Plataformas
                                        </th>
                                        <td>
                                           Android, IOS, Web
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="caption">
                            <p >
                                <a href="#" class="btn btn-warning" role="button">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-danger" role="button">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </p>
                        </div>
                      </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">

                <div class="row" style="margin-top : 10px;">
                    <div class="col-md-12">
                        <a href="{{ url("services/createService") }}" class="btn btn-default pull-right">
                            {{ image("img/truck.png", "style" : "height : 24px;") }}
                            Nuevo servicio
                        </a>
                    </div>
                </div>

                <div class="row" style="margin-top : 10px;">
                    {% for item in services %}
                    <div class="col-sm-12 col-md-12">
                      <div class="thumbnail">
                        <div class="caption">
                            <h3>
                                {{ item.name }}
                            </h3>
                            <p class="trunk">
                                {{ item.description }}
                            </p>
                        </div>
                        <div class="">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            {{ image("img/truck.png", "style" : "width : 80px") }}
                                        </th>
                                        <td colspan="2">
                                            <p style="text-align : middle;">Go Colombia</p>
                                        </td>
                                    </tr>
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
                        <div class="">
                            <p>
                                <a href="{{ url("services/editProduct") }}" class="btn btn-warning" role="button">
                                      <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a href="{{ url("services/deleteProduct") }}" class="btn btn-danger" role="button">
                                      <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </p>
                        </div>
                      </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function initMap() {

        var mapDivE = document.getElementById('mapEvent1');
        var map = new google.maps.Map(mapDivE, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });

        var mapDivE2 = document.getElementById('mapEvent2');
        var map2 = new google.maps.Map(mapDivE2, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });

        var mapDivE3 = document.getElementById('mapEvent3');
        var map3 = new google.maps.Map(mapDivE3, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGNsm6WSTUNTdoPh4PSbxjkY8DrQU6zww&callback=initMap"></script>
