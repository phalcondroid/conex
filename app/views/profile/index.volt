
{{ form("profile/index", "method" : "post", "enctype" : "multipart/form-data", "id" : "profile_form") }}
    <div class="panel panel-default" style="margin-top : 60px; background-color : #ffffff;">
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <h2>Perfil personal</h2>
                        </th>
                        <th>
                            <a href="{{ url("services/index") }}" class="btn btn-danger pull-right">
                                <i class="glyphicon glyphicon-share-alt"></i>
                                Volver
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="width : 40%;">
                            Imagen
                        </th>
                        <th style="text-align : center">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <a href="#" class="thumbnail">
                                        {{ image( user.avatar, "style" : "width : 180px; height : 160px;") }}
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3 col-md-3">
                                    <input type="file" name="image" value="" required>
                                </div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            <input type="text" name="name" value="{{ user.name }}" class="form-control" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Documento de identidad
                        </th>
                        <th>
                            <input type="text" name="identify" value="{{ user.identify }}" class="form-control" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Teléfono móvil
                        </th>
                        <th>
                            <input type="text" name="phone" value="{{ user.mobile_phone }}" class="form-control" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Ciudad de residencia
                        </th>
                        <th>
                            <div id="map" style="width : 300px; height:200px">

                            </div>
                            <input type="text" name="address" id="address" value="{{ user.address }}" class="form-control" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Correo institucional
                        </th>
                        <th>
                            <input type="text" name="email" value="{{ user.email }}" class="form-control" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Otros email
                        </th>
                        <th>
                            <input type="text" name="other_email" value="{{ user.other_email }}" class="form-control" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Fecha de nacimiento
                        </th>
                        <th>
                            <input type="text" name="birthday" id="birthday" value="{{ user.birthday }}" class="form-control" required>
                        </th>
                    </tr>
                    {#
                    <tr>
                        <th>
                            Tipo estudiante
                        </th>
                        <th>
                            <select class="btn" name="studentType" class="form-control">
                                {% for item in studentType %}
                                    <option value="{{ item.id_student_type }}">
                                        {{ item.student_type }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    #}
                    <tr>
                        <th>
                            Carrera
                        </th>
                        <th>
                            <label for="">

                            </label>
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
    $("#birthday").datepicker({
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
