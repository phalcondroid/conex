
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
                                    <input type="hidden" name="lat" id="lat" value="">
                                    <input type="hidden" name="lng" id="lng" value="">
                                </div>
                            </div>
                            <input type="text" class="form-control" name="address" id="address" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Descripción
                        </th>
                        <th>
                            <textarea style="width : 100%;"name="description" id="description" rows="8" cols="40"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Fecha de publicación
                        </th>
                        <th>
                            <input type="text" id="publishDate" name="publishDate" value="" class="form-control">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Valor
                        </th>
                        <th>
                            <input type="text" name="value" value="" class="form-control">
                            <span>A convenir</span>
                            <input type="checkbox" name="value" value="">
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

$(function () {
    $("#description").jqte();
    $("#publishDate").datepicker({
        dateFormat: "yy-mm-dd"
    });
});

var autocomplete, marker;

function initAutocomplete() {

    setMap(4.624335, -74.063644);
    autocomplete = new google.maps.places.Autocomplete((document.getElementById('address')), {types: ['geocode']});
    autocomplete.addListener('place_changed', setMapLocation);

}

function setMap(lat, lng) {

    $(function () {
        $("#lat").val(lat);
        $("#lng").val(lng);
    });

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
    setMap(place.geometry.location.lat(), place.geometry.location.lng())
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGNsm6WSTUNTdoPh4PSbxjkY8DrQU6zww&signed_in=true&region=co&libraries=places&callback=initAutocomplete"
        async defer></script>
