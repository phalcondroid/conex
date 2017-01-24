
{{ form("services/createEvent", "method" : "post", "enctype" : "multipart/form-data") }}
    <h2>Nuevo evento</h2>
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
                            Nombre
                        </th>
                        <th>
                            <input type="text" class="form-control" name="name" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Tipo de evento
                        </th>
                        <th>
                            <select class="form-control" name="eventType">
                                <option>......</option>
                                {% for item in eventType %}
                                    <option value="{{ item.id_event_type }}">
                                        {{ item.event_type }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Empresa</th>
                        <th>
                             <select class="form-control" name="company">
                                <option>......</option>
                                {% for item in companies %}
                                    <option value="{{ item.id_company }}">
                                        {{ item.name }}
                                    </option>
                                {% endfor %}
                            </select>
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
                            <input type="hidden" name="lat" id="lat" value="">
                            <input type="hidden" name="lng" id="lng" value="">
                            <input type="text" name="address" id="address" class="form-control">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Descripción
                        </th>
                        <th>
                            <textarea class="form-control" name="description" id="description" rows="8" cols="40"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Elogan
                        </th>
                        <th>
                            <textarea class="form-control" name="slogan" rows="8" cols="40"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Fecha de inicio
                        </th>
                        <th>
                            <input type="text" class="form-control" name="startDate" id="startDate" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Fecha de finalización
                        </th>
                        <th>
                            <input type="text" class="form-control" name="finishDate" id="finishDate" value="">
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

    $(function () {

        $("#startDate").datepicker({
            dateFormat : "yy-mm-dd"
        });

        $("#finishDate").datepicker({
            dateFormat : "yy-mm-dd"
        });

        $("#description").jqte();
    });

    var autocomplete, marker;

    function initAutocomplete() {

        setMap(4.624335, -74.063644);
        autocomplete = new google.maps.places.Autocomplete((document.getElementById('address')), {types: ['geocode']});
        autocomplete.addListener('place_changed', setMapLocation);

    }

    function setMap(lat, lng) {
        var latlng = {lat: lat, lng: lng};
        var mapDivE = document.getElementById('map');
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
    }

    function setMapLocation() {
        var place = autocomplete.getPlace();
        $(function () {
            $("#lat").val(place.geometry.location.lat());
            $("#lng").val(place.geometry.location.lng());
        }.bind(place));
        setMap(place.geometry.location.lat(), place.geometry.location.lng())
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGNsm6WSTUNTdoPh4PSbxjkY8DrQU6zww&signed_in=true&region=co&libraries=places&callback=initAutocomplete"
            async defer></script>
