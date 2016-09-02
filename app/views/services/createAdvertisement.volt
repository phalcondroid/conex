
{{ form("services/createAdvertisement", "method" : "post") }}

    <h2>Nuevo Anuncio</h2>
    <a href="{{ url("services/index") }}" class="btn btn-danger pull-right">
        <i class="glyphicon glyphicon-share-alt"></i>
        Volver
    </a>

    <div class="panel panel-default" style="margin-top : 60px; background-color : #ffffff;">
        <div class="panel-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>
                            Titulo
                        </th>
                        <th>
                            <input type="text" class="form-control" name="name" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Dirección
                        </th>
                        <th>
                            <div class="row">
                                <div class="col-xs-4 col-md-4">
                                    <div id="map" style="width : 300px; height:200px">

                                    </div>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="address" id="direccion" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Descripción
                        </th>
                        <th>
                            <textarea style="width : 100%;"name="description" rows="8" cols="40"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Fecha de publicación
                        </th>
                        <th>
                            <input type="text" id="startDate" name="publishDate" value="">
                        </th>
                    </tr>

                    <tr>
                        <th>
                            Plataformas
                        </th>
                        <th>
                            <ul>
                                <li>
                                    Android
                                    <input type="radio" class="pull-right" name="si" value="">
                                </li>
                                <li>
                                    IOS
                                    <input type="radio"  class="pull-right" name="si" value="">
                                </li>
                                <li>
                                    WEB
                                    <input type="radio" class="pull-right" name="si" value="">
                                </li>
                            </ul>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Valor
                        </th>
                        <th>
                            <input type="text" name="value" value="">
                            <span>A convenir</span>
                            <input type="checkbox" name="name" value="">
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align : center;">
                            <button type="submit" class="btn btn-success">
                                <i class="glyphicon glyphicon-floppy-disk"></i>
                                Guardar
                            </button>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
{{ end_form() }}

<script type="text/javascript">

    window.onload = function () {
        $(function () {
            $("#startDate").datepicker();
        });
    }

    function initMap() {

        var mapDivE = document.getElementById('map');
        var map = new google.maps.Map(mapDivE, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGNsm6WSTUNTdoPh4PSbxjkY8DrQU6zww&callback=initMap"></script>
