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
<div class="container" style="margin-top: 80px;">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist" style="margin-top : 15px">
                <li role="presentation" class="active">
                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                        Productos
                        &nbsp;
                        <span class="label label-pill label-success">5</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                        Eventos
                        &nbsp;
                        <span class="label label-pill label-danger">5</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#vacancy" aria-controls="messages" role="tab" data-toggle="tab">
                        Anuncios
                        &nbsp;
                        <span class="label label-pill label-warning">5</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                        Servicios
                        &nbsp;
                        <span class="label label-pill label-primary">5</span>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">

                    <div class="row" style="margin-top : 10px;">
                        <div class="col-md-12">
                            <a href="<?= $this->url->get('services/createProduct') ?>" class="btn btn-default pull-right">
                                <?= $this->tag->image(['img/barcode.png', 'style' => 'height : 24px;']) ?>
                                Nuevo producto
                            </a>
                        </div>
                    </div>

                    <div class="row" style="margin-top : 10px;">

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <?= $this->tag->image(['img/inovatio1.png', 'style' => 'widht : 400px; height : 350px']) ?>
                          <div class="caption">
                            <h3>Almohada Noel</h3>
                            <p class="trunk">
                                Collaboration Lab ‘Juntos por el Agua’ es una iniciativa conjunta de la Red Local de Pacto
                                Global en Colombia, la plataforma internacional
                            </p>
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

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <?= $this->tag->image(['img/inovatio2.jpg', 'style' => 'widht : 400px; height : 350px']) ?>
                          <div class="caption">
                            <h3>Tapa de corchos</h3>
                            <p class="trunk">
                                Collaboration Lab ‘Juntos por el Agua’ es una iniciativa conjunta de la Red Local de Pacto
                                Global en Colombia, la plataforma internacional
                            </p>
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

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <?= $this->tag->image(['img/inovatio3.jpg', 'style' => 'widht : 400px; height : 350px']) ?>
                          <div class="caption">
                            <h3>Tostada pad</h3>
                            <p class="trunk">
                                Collaboration Lab ‘Juntos por el Agua’ es una iniciativa conjunta de la Red Local de Pacto
                                Global en Colombia, la plataforma internacional
                            </p>
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

                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="profile">

                    <div class="row" style="margin-top : 10px;">
                        <div class="col-md-12">
                            <a href="<?= $this->url->get('services/createEvent') ?>" class="btn btn-default pull-right">
                                <?= $this->tag->image(['img/calendar.png', 'style' => 'height : 24px;']) ?>
                                Nuevo evento
                            </a>
                        </div>
                    </div>

                    <div class="row" style="margin-top : 10px;">

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <div style="width : 100%; height : 300px" id="mapEvent1">

                          </div>
                          <div class="caption">
                            <h3>
                                Taller de creación de empresas
                            </h3>
                            <p class="trunk">
                                Collaboration Lab ‘Juntos por el Agua’ es una iniciativa conjunta de la Red Local de Pacto
                                Global en Colombia, la plataforma internacional
                            </p>
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

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div style="width : 100%; height : 300px" id="mapEvent2">

                            </div>
                          <div class="caption">
                            <h3>
                                Incubadora de proyectos
                            </h3>
                            <p class="trunk">
                                Collaboration Lab ‘Juntos por el Agua’ es una iniciativa conjunta de la Red Local de Pacto
                                Global en Colombia, la plataforma internacional
                            </p>
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

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div style="width : 100%; height : 300px" id="mapEvent3">

                            </div>
                          <div class="caption">
                            <h3>
                                Capital semilla
                            </h3>
                            <p class="trunk">
                                Collaboration Lab ‘Juntos por el Agua’ es una iniciativa conjunta de la Red Local de Pacto
                                Global en Colombia, la plataforma internacional
                            </p>
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

                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="vacancy">

                    <div class="row" style="margin-top : 10px;">
                        <div class="col-md-12">
                            <a href="<?= $this->url->get('services/createVacancy') ?>" class="btn btn-default pull-right">
                                <?= $this->tag->image(['img/cart.png', 'style' => 'height : 24px;']) ?>
                                Crear anuncio
                            </a>
                        </div>
                    </div>

                    <div class="row" style="margin-top : 10px;">

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                              <h3>
                                  Servicio de mensajería
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
                                                  <li>Android</li>
                                                  <li>Google Maps</li>
                                                  <li>mvc</li>
                                                  <li>Firebase</li>
                                              </ul>
                                          </td>
                                      </tr>
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

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                              <h3>
                                  Servicio de mensajería
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
                                                  <li>Android</li>
                                                  <li>Google Maps</li>
                                                  <li>mvc</li>
                                                  <li>Firebase</li>
                                              </ul>
                                          </td>
                                      </tr>
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

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                              <h3>
                                  Servicio de mensajería
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
                                                  <li>Android</li>
                                                  <li>Google Maps</li>
                                                  <li>mvc</li>
                                                  <li>Firebase</li>
                                              </ul>
                                          </td>
                                      </tr>
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
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">

                    <div class="row" style="margin-top : 10px;">
                        <div class="col-md-12">
                            <a href="<?= $this->url->get('services/createService') ?>" class="btn btn-default pull-right">
                                <?= $this->tag->image(['img/truck.png', 'style' => 'height : 24px;']) ?>
                                Nuevo servicio
                            </a>
                        </div>
                    </div>

                    <div class="row" style="margin-top : 10px;">
                        <div class="col-sm-12 col-md-12">
                          <div class="thumbnail">
                            <div class="caption">
                              <h3>Paquete turistico - Go Colombia</h3>
                              <p class="trunk">
                                  Collaboration Lab ‘Juntos por el Agua’ es una iniciativa conjunta de la Red Local de Pacto
                                  Global en Colombia, la plataforma internacional
                              </p>
                            </div>
                            <div class="">

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
                            <div class="">
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
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                          <div class="thumbnail">
                            <div class="caption">
                              <h3>Paquete turistico - Go Colombia</h3>
                              <p class="trunk">
                                  Collaboration Lab ‘Juntos por el Agua’ es una iniciativa conjunta de la Red Local de Pacto
                                  Global en Colombia, la plataforma internacional
                              </p>
                            </div>
                            <div class="">

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
                            <div class="">
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
                    </div>

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
