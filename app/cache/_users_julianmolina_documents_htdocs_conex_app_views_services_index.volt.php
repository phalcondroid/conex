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
                        <?= $cProducts ?>
                    </span>
                </a>
            </li>
            <li role="presentation">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                    Eventos
                    &nbsp;
                    <span class="label label-pill label-danger">
                        <?= $cEvents ?>
                    </span>
                </a>
            </li>
            <li role="presentation">
                <a href="#vacancy" aria-controls="messages" role="tab" data-toggle="tab">
                    Anuncios
                    &nbsp;
                    <span class="label label-pill label-warning">
                        <?= $cAdvertisement ?>
                    </span>
                </a>
            </li>
            <li role="presentation">
                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                    Servicios
                    &nbsp;
                    <span class="label label-pill label-primary">
                        <?= $cServices ?>
                    </span>
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

                <?php $initial = 3; ?>
                <?php $step = 0; ?>
                <?php $index = 0; ?>

                <?php $v141648709836531388991iterator = $products; $v141648709836531388991incr = 0; $v141648709836531388991loop = new stdClass(); $v141648709836531388991loop->self = &$v141648709836531388991loop; $v141648709836531388991loop->length = count($v141648709836531388991iterator); $v141648709836531388991loop->index = 1; $v141648709836531388991loop->index0 = 1; $v141648709836531388991loop->revindex = $v141648709836531388991loop->length; $v141648709836531388991loop->revindex0 = $v141648709836531388991loop->length - 1; ?><?php foreach ($v141648709836531388991iterator as $item) { ?><?php $v141648709836531388991loop->first = ($v141648709836531388991incr == 0); $v141648709836531388991loop->index = $v141648709836531388991incr + 1; $v141648709836531388991loop->index0 = $v141648709836531388991incr; $v141648709836531388991loop->revindex = $v141648709836531388991loop->length - $v141648709836531388991incr; $v141648709836531388991loop->revindex0 = $v141648709836531388991loop->length - ($v141648709836531388991incr + 1); $v141648709836531388991loop->last = ($v141648709836531388991incr == ($v141648709836531388991loop->length - 1)); ?>

                    <?php if ($v141648709836531388991loop->first) { ?>
                        <div class="row" style="margin-top : 10px;">
                    <?php } ?>

                    <?php if ($index == $step) { ?>
                        <?php $step += 3; ?>
                        </div>
                        <div class="row" style="margin-top : 10px;">
                    <?php } ?>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <?= $this->tag->image([$item->logo, 'style' => 'widht : 400px; height : 350px']) ?>
                            <div class="caption">
                                <h3>
                                    <?= $item->name ?>
                                </h3>
                                <p class="trunk">
                                    <?= $item->description ?>
                                </p>
                                <p>
                                    <a href="<?= $this->url->get('products/edit/' . $item->id_products) ?>" class="btn btn-warning" role="button">
                                          <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                    <a href="<?= $this->url->get('services/deleteProduct/' . $item->id_products) ?>" class="btn btn-danger" role="button">
                                          <i class="glyphicon glyphicon-trash"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php if ($v141648709836531388991loop->last) { ?>
                        </div>
                    <?php } ?>
                    <?php $index++; ?>

                <?php $v141648709836531388991incr++; } ?>

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

                <?php $initial = 3; ?>
                <?php $step = 0; ?>
                <?php $index = 0; ?>

                <?php $v141648709836531388991iterator = $events; $v141648709836531388991incr = 0; $v141648709836531388991loop = new stdClass(); $v141648709836531388991loop->self = &$v141648709836531388991loop; $v141648709836531388991loop->length = count($v141648709836531388991iterator); $v141648709836531388991loop->index = 1; $v141648709836531388991loop->index0 = 1; $v141648709836531388991loop->revindex = $v141648709836531388991loop->length; $v141648709836531388991loop->revindex0 = $v141648709836531388991loop->length - 1; ?><?php foreach ($v141648709836531388991iterator as $item) { ?><?php $v141648709836531388991loop->first = ($v141648709836531388991incr == 0); $v141648709836531388991loop->index = $v141648709836531388991incr + 1; $v141648709836531388991loop->index0 = $v141648709836531388991incr; $v141648709836531388991loop->revindex = $v141648709836531388991loop->length - $v141648709836531388991incr; $v141648709836531388991loop->revindex0 = $v141648709836531388991loop->length - ($v141648709836531388991incr + 1); $v141648709836531388991loop->last = ($v141648709836531388991incr == ($v141648709836531388991loop->length - 1)); ?>

                    <?php if ($v141648709836531388991loop->first) { ?>
                        <div class="row" style="margin-top : 10px;">
                    <?php } ?>

                    <?php if ($index == $step) { ?>
                        <?php $step += 3; ?>
                        </div>
                        <div class="row" style="margin-top : 10px;">
                    <?php } ?>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div style="width : 100%; height : 300px" id="mapEvent<?= $item->id_events ?>">

                            </div>

                            <div class="caption">
                              <h3>
                                  <?= $item->name ?>
                              </h3>
                              <p class="trunk">
                                <?= $item->description ?>
                              </p>
                              <p >
                                  <a href="<?= $this->url->get('events/edit/' . $item->id_events) ?>" class="btn btn-warning" role="button">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                  </a>
                                  <a href="<?= $this->url->get('services/deleteEvent/' . $item->id_events) ?>" class="btn btn-danger" role="button">
                                        <i class="glyphicon glyphicon-trash"></i>
                                  </a>
                              </p>
                            </div>
                        </div>
                    </div>

                    <?php if ($v141648709836531388991loop->last) { ?>
                        </div>
                    <?php } ?>
                    <?php $index++; ?>

                <?php $v141648709836531388991incr++; } ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="vacancy">

                <div class="row" style="margin-top : 10px;">
                    <div class="col-md-12">
                        <a href="<?= $this->url->get('services/createAdvertisement') ?>" class="btn btn-default pull-right">
                            <?= $this->tag->image(['img/cart.png', 'style' => 'height : 24px;']) ?>
                            Crear anuncio
                        </a>
                    </div>
                </div>

                <?php $initial = 3; ?>
                <?php $step = 0; ?>
                <?php $index = 0; ?>

                <?php $v141648709836531388991iterator = $advertisement; $v141648709836531388991incr = 0; $v141648709836531388991loop = new stdClass(); $v141648709836531388991loop->self = &$v141648709836531388991loop; $v141648709836531388991loop->length = count($v141648709836531388991iterator); $v141648709836531388991loop->index = 1; $v141648709836531388991loop->index0 = 1; $v141648709836531388991loop->revindex = $v141648709836531388991loop->length; $v141648709836531388991loop->revindex0 = $v141648709836531388991loop->length - 1; ?><?php foreach ($v141648709836531388991iterator as $item) { ?><?php $v141648709836531388991loop->first = ($v141648709836531388991incr == 0); $v141648709836531388991loop->index = $v141648709836531388991incr + 1; $v141648709836531388991loop->index0 = $v141648709836531388991incr; $v141648709836531388991loop->revindex = $v141648709836531388991loop->length - $v141648709836531388991incr; $v141648709836531388991loop->revindex0 = $v141648709836531388991loop->length - ($v141648709836531388991incr + 1); $v141648709836531388991loop->last = ($v141648709836531388991incr == ($v141648709836531388991loop->length - 1)); ?>

                    <?php if ($v141648709836531388991loop->first) { ?>
                        <div class="row" style="margin-top : 10px;">
                    <?php } ?>

                    <?php if ($index == $step) { ?>
                        <?php $step += 3; ?>
                        </div>
                        <div class="row" style="margin-top : 10px;">
                    <?php } ?>

                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                              <div class="caption">
                                <h3>
                                    <?= $item->name ?>
                                </h3>
                              </div>
                            <div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                Descripción
                                            </th>
                                            <td>
                                                <ul>
                                                    <?= $item->description ?>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Dirección
                                            </th>
                                            <td>
                                                <ul>
                                                    <?= $item->address ?>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Fecha de publicación
                                            </th>
                                            <td>
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control" value="<?= $item->publish_date ?>" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Visitas
                                            </th>
                                            <td>
                                                <span class="label label-warning">
                                                    <?= $item->views ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Valor
                                            </th>
                                            <td>
                                                <span class="label label-success">
                                                    <?= $item->value ?>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="caption">
                                <p >
                                    <a href="<?= $this->url->get('advertisement/edit/' . $item->id_advertisement) ?>" class="btn btn-warning" role="button">
                                          <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                    <a href="<?= $this->url->get('services/deleteAdvertisement/' . $item->id_advertisement) ?>" class="btn btn-danger" role="button">
                                          <i class="glyphicon glyphicon-trash"></i>
                                    </a>
                                </p>
                            </div>
                          </div>
                      </div>
                      <?php if ($v141648709836531388991loop->last) { ?>
                          </div>
                      <?php } ?>
                      <?php $index++; ?>
                <?php $v141648709836531388991incr++; } ?>
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

                <?php $step = 0; ?>
                <?php $index = 0; ?>

                <?php $v141648709836531388991iterator = $services; $v141648709836531388991incr = 0; $v141648709836531388991loop = new stdClass(); $v141648709836531388991loop->self = &$v141648709836531388991loop; $v141648709836531388991loop->length = count($v141648709836531388991iterator); $v141648709836531388991loop->index = 1; $v141648709836531388991loop->index0 = 1; $v141648709836531388991loop->revindex = $v141648709836531388991loop->length; $v141648709836531388991loop->revindex0 = $v141648709836531388991loop->length - 1; ?><?php foreach ($v141648709836531388991iterator as $item) { ?><?php $v141648709836531388991loop->first = ($v141648709836531388991incr == 0); $v141648709836531388991loop->index = $v141648709836531388991incr + 1; $v141648709836531388991loop->index0 = $v141648709836531388991incr; $v141648709836531388991loop->revindex = $v141648709836531388991loop->length - $v141648709836531388991incr; $v141648709836531388991loop->revindex0 = $v141648709836531388991loop->length - ($v141648709836531388991incr + 1); $v141648709836531388991loop->last = ($v141648709836531388991incr == ($v141648709836531388991loop->length - 1)); ?>

                    <?php if ($v141648709836531388991loop->first) { ?>
                        <div class="row" style="margin-top : 10px;">
                    <?php } ?>

                    <?php if ($index == $step) { ?>
                        <?php $step++; ?>
                        </div>
                        <div class="row" style="margin-top : 10px;">
                    <?php } ?>

                    <div class="col-sm-12 col-md-12">
                      <div class="thumbnail">
                        <div class="caption">
                            <h3>
                                <?= $item->name ?>
                            </h3>
                            <p class="trunk">
                                <?= $item->description ?>
                            </p>
                        </div>
                        <div class="">
                            <p>
                                <a href="<?= $this->url->get('services/edit/' . $item->id_service) ?>" class="btn btn-warning" role="button">
                                      <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a href="<?= $this->url->get('services/delete/' . $item->id_service) ?>" class="btn btn-danger" role="button">
                                      <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </p>
                        </div>
                      </div>
                    </div>

                    <?php if ($v141648709836531388991loop->last) { ?>
                        </div>
                    <?php } ?>
                    <?php $index++; ?>

                <?php $v141648709836531388991incr++; } ?>
            </div>
        </div>
    </div>
</div>

<script>

function initAutocomplete() {
    <?php $v141648709836531388991iterator = $events; $v141648709836531388991incr = 0; $v141648709836531388991loop = new stdClass(); $v141648709836531388991loop->self = &$v141648709836531388991loop; $v141648709836531388991loop->length = count($v141648709836531388991iterator); $v141648709836531388991loop->index = 1; $v141648709836531388991loop->index0 = 1; $v141648709836531388991loop->revindex = $v141648709836531388991loop->length; $v141648709836531388991loop->revindex0 = $v141648709836531388991loop->length - 1; ?><?php foreach ($v141648709836531388991iterator as $item) { ?><?php $v141648709836531388991loop->first = ($v141648709836531388991incr == 0); $v141648709836531388991loop->index = $v141648709836531388991incr + 1; $v141648709836531388991loop->index0 = $v141648709836531388991incr; $v141648709836531388991loop->revindex = $v141648709836531388991loop->length - $v141648709836531388991incr; $v141648709836531388991loop->revindex0 = $v141648709836531388991loop->length - ($v141648709836531388991incr + 1); $v141648709836531388991loop->last = ($v141648709836531388991incr == ($v141648709836531388991loop->length - 1)); ?>

        var latlng = {lat: <?= $item->lat ?>, lng: <?= $item->lng ?>};
        var mapDivE = document.getElementById("mapEvent" + <?= $item->id_events ?>);
        var map = new google.maps.Map(mapDivE, {
            center: latlng,
            zoom: 16,
            componentRestrictions: {country: "co"}
        });

        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: 'Tu dirección'
        });

    <?php $v141648709836531388991incr++; } ?>
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGNsm6WSTUNTdoPh4PSbxjkY8DrQU6zww&signed_in=true&region=co&libraries=places&callback=initAutocomplete"
            async defer></script>
