<div class="row">
    <div class="col-md-12">
        &nbsp;
    </div>
</div>
<div class="row">
    <div class="col-md-9">

        <?php foreach ($events as $item) { ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h3 style="margin-top : 3px;">
                                <?= $item->name ?>
                            </h3>
                            <?= $this->tag->image(['img/calendar.png', 'style' => 'float:right; margin-top : -35px; width : 32px']) ?>
                        </div>
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-12">
                                    <p style="text-align : justify">

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
                                                    Descripción
                                                </th>
                                                <td>
                                                    <?= $item->description ?>
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
                        </div>
                        <div class="ibox-footer">
                            <div class="row">
                                <div class="col-md-12" style="text-align : right">

                                    <button type="button" data-toggle="modal" data-target="#myModalEvent<?= $item->id_events ?>" class="btnModal btn btn-default" style="float:left;" >
                                        <?= $this->tag->image(['img/agreement.png', 'style' => ' width : 30px']) ?>
                                    </button>

                                    <div class="modal fade" id="myModalEvent<?= $item->id_events ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Contactar &nbsp; &nbsp;</h4>
                                          </div>
                                          <div class="modal-body">
                                            <textarea name="name" id="msjEvent<?= $item->id_events ?>" rows="8" cols="40" style="width : 100%;">Escribe un mensaje</textarea>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
                                            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="aggrement(<?= $item->id_events ?>, 'event', 'msjEvent<?= $item->id_events ?>')">Confirmar</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <?= $this->tag->image(['img/binoculars.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge"><?= $item->views ?></span>

                                    &nbsp;&nbsp;

                                    <button type="button" class="btnModal" data-toggle="modal" data-target="#myModal">
                                        <?= $this->tag->image(['img/speech-bubble.png', 'style' => 'width : 18px']) ?>
                                        <span class="badge">10</span>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php foreach ($products as $item) { ?>
            <div class="row">
                <div class="col-md-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h3 style="margin-top : 3px;">
                            <?= $item->name ?>
                        </h3>
                        <?= $this->tag->image(['img/barcode.png', 'style' => 'float:right; margin-top : -35px; width : 32px']) ?>
                    </div>
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-md-12">
                                <p style="text-align : justify">

                                </p>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                Slogan
                                            </th>
                                            <td>
                                                <?= $item->slogan ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Descripción
                                            </th>
                                            <td>
                                                <?= $item->description ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="text-align : right">

                                <button type="button" data-toggle="modal" data-target="#myModalProd<?= $item->id_products ?>" class="btnModal btn btn-default" style="float:left;" >
                                    <?= $this->tag->image(['img/agreement.png', 'style' => ' width : 48px']) ?>
                                </button>

                                <div class="modal fade" id="myModalProd<?= $item->id_products ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Contactar &nbsp; &nbsp;</h4>
                                      </div>
                                      <div class="modal-body">
                                        <textarea name="name" id="msjProd<?= $item->id_products ?>" rows="8" cols="40" style="width : 100%;">Escribe un mensaje</textarea>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="aggrement(<?= $item->id_products ?>, 'prod', 'msjProd<?= $item->id_products ?>')">Confirmar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <?= $this->tag->image(['img/binoculars.png', 'style' => 'width : 18px']) ?>
                                <span class="badge"><?= $item->views ?></span>

                                &nbsp;&nbsp;

                                <button type="button" class="btnModal" data-toggle="modal" data-target="#myModal">
                                    <?= $this->tag->image(['img/speech-bubble.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">10</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <?php } ?>

        <?php foreach ($advertisement as $item) { ?>
            <div class="row">
                <div class="col-md-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h3 style="margin-top : 3px;">
                            <?= $item->name ?>
                        </h3>
                        <?= $this->tag->image(['img/barcode.png', 'style' => 'float:right; margin-top : -35px; width : 32px']) ?>
                    </div>
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-md-12">
                                <p style="text-align : justify">

                                </p>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                Publicación
                                            </th>
                                            <td>
                                                <?= $item->publish_date ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Descripción
                                            </th>
                                            <td>
                                                <?= $item->description ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="text-align : right">

                                <button type="button" data-toggle="modal" data-target="#myModalAdv<?= $item->id_advertisement ?>" class="btnModal btn btn-default" style="float:left;" >
                                    <?= $this->tag->image(['img/agreement.png', 'style' => ' width : 48px']) ?>
                                </button>

                                <div class="modal fade" id="myModalAdv<?= $item->id_advertisement ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Contactar &nbsp; &nbsp;</h4>
                                      </div>
                                      <div class="modal-body">
                                        <textarea name="name" id="msjAdv<?= $item->id_advertisement ?>" rows="8" cols="40" style="width : 100%;">Escribe un mensaje</textarea>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="aggrement(<?= $item->id_advertisement ?>, 'adv', 'msjAdv<?= $item->id_advertisement ?>')">Confirmar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <?= $this->tag->image(['img/binoculars.png', 'style' => 'width : 18px']) ?>
                                <span class="badge"><?= $item->views ?></span>

                                &nbsp;&nbsp;

                                <button type="button" class="btnModal" data-toggle="modal" data-target="#myModal">
                                    <?= $this->tag->image(['img/speech-bubble.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge">10</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <?php } ?>

        <?php foreach ($services as $item) { ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h3 style="margin-top : 3px;">
                                <?= $item->name ?>
                            </h3>
                            <?= $this->tag->image(['img/barcode.png', 'style' => 'float:right; margin-top : -35px; width : 32px']) ?>
                        </div>
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-12">
                                    <p style="text-align : justify">

                                    </p>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    Descripción
                                                </th>
                                                <td>
                                                    <?= $item->description ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="text-align : right">

                                    <button type="button" data-toggle="modal" data-target="#myModalServ<?= $item->id_service ?>" class="btnModal btn btn-default" style="float:left;" >
                                        <?= $this->tag->image(['img/agreement.png', 'style' => ' width : 48px']) ?>
                                    </button>

                                    <div class="modal fade" id="myModalServ<?= $item->id_service ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Contactar &nbsp; &nbsp;</h4>
                                          </div>
                                          <div class="modal-body">
                                            <textarea name="name" id="msjServ<?= $item->id_service ?>" rows="8" cols="40" style="width : 100%;">Escribe un mensaje</textarea>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="aggrement(<?= $item->id_service ?>, 'adv', 'msjServ<?= $item->id_service ?>')">Confirmar</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <?= $this->tag->image(['img/binoculars.png', 'style' => 'width : 18px']) ?>
                                    <span class="badge"><?= $item->views ?></span>

                                    &nbsp;&nbsp;

                                    <button type="button" class="btnModal" data-toggle="modal" data-target="#myModal">
                                        <?= $this->tag->image(['img/speech-bubble.png', 'style' => 'width : 18px']) ?>
                                        <span class="badge">10</span>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="col-md-3">
        <div class="chat-users" style="margin-left:2%; margin-top:1%; height:100%; background-color:white;">
            <div class="users-list" id="deal_list">
                <?php foreach ($aggrements as $item) { ?>
                    <div class="chat-user">
                        <img class="chat-avatar" src="<?= $this->url->get($item->Users->avatar) ?>" alt="" >
                        <div class="chat-user-name">
                            <a href="#" class="truncate"><?= $item->message ?></a>
                        </div>
                    </div>
                <?php } ?>
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
            $.ajax({
                "url" : "<?= $this->url->get('deals/getJsonDeals') ?>",
                "type" : "post",
                "data" : {

                }
            }).done(function (response) {
                console.log(response);
            });

        });
    });

    channel.bind('message', function(data) {
        $(function () {
            $("#messageBadge").html(
                parseInt($("#messageBadge").html()) + 1
            );
        });
    });

    function aggrement(id, type, message) {
        $.ajax({
            "url" : "<?= $this->url->get('deals/aggrement') ?>",
            "type": "post",
            "data" : {
                "id" : id,
                "type" : type,
                "message" : $("#" + message).val()
            }
        }).done(function (response) {
            console.log(response);
        });
    }

    function initMap() {

        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGNsm6WSTUNTdoPh4PSbxjkY8DrQU6zww&signed_in=true&region=co&libraries=places&callback=initMap"
            async defer></script>
