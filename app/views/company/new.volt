
<a href="{{ url("company/index")}}" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

{{ form("company/save", "method" : "post", "enctype" : "multipart/form-data") }}
    <div class="panel panel-default" style="margin-top : 60px; background-color : #ffffff;">
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">
                            <h2>Perfil empresarial</h2>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="width : 40%;">
                            Logo
                        </th>
                        <th style="text-align : center">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <a href="#" class="thumbnail">
                                        {{ image('img/emptyimg.png', "id" : "logobox", "style" : "width : 180px; height : 160px;") }}
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3 col-md-3">
                                    <input type="file" name="logo" id="logo" value="">
                                </div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            <input type="text" name="name" class="form-control" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Descripción
                        </th>
                        <th>
                            <textarea name="description" id="description" class="form-control" rows="8" cols="40" style="width : 100%;"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Constitución legal
                        </th>
                        <th>
                            <select class="form-control" name="legalConstitution">
                                {% for item in legalConstitution %}
                                    <option value="{{ item.getIdLegalConstitution() }}">
                                        {{ item.getLegalConstitution() }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Covertura
                        </th>
                        <th>
                            <select class="form-control" name="coverage">
                                {% for item in coverage %}
                                    <option value="{{ item.getIdCoverage() }}">
                                        {{ item.getCoverage() }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Cargo ocupado en la empresa
                        </th>
                        <th>
                            <select class="form-control" name="companyPosition">
                                {% for item in companyPosition %}
                                    <option value="{{ item.getIdCompanyPosition() }}">
                                        {{ item.getPosition() }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Tamaño de empresa
                        </th>
                        <th>
                            <select class="form-control" name="sizeCompany">
                                {% for item in sizeCompany %}
                                    <option value="{{ item.getIdSizeCompany() }}">
                                        {{ item.getSizeCompany() }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Activos de empresa
                        </th>
                        <th>
                            <select class="form-control" name="companyAssets">
                                {% for item in companyAssets %}
                                    <option value="{{ item.getIdCompanyAssets() }}">
                                        {{ item.getCompanyAssets() }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Número de empleados
                        </th>
                        <th>
                            <select class="form-control" name="employeeNumber">
                                {% for item in employeeNumber %}
                                    <option value="{{ item.getIdEmployeeNumber() }}">
                                        {{ item.getEmployeeNumber() }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Sector al que pertenece
                        </th>
                        <th>
                            <select class="form-control" name="companySector">
                                {% for item in companySector %}
                                    <option value="{{ item.getIdCompanySector() }}">
                                        {{ item.getCompanySector() }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Regístro en cámara de comercio
                        </th>
                        <th>
                            Si
                            <input type="radio" name="camera" id="reg_yes" value="1">
                            No
                            <input type="radio" name="camera" id="reg_no" value="0">
                        </th>
                    </tr>
                    <tr id="camera_comerce" style="display: none">
                        <th>
                            Año de regístro
                        </th>
                        <th>
                            <input type="text" name="register_year" id="register_year" class="form-control" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Dirección
                        </th>
                        <th>
                            <div id="map" style="width : 300px; height:200px">

                            </div>
                            <input type="text" name="address" id="address" class="form-control" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Página web
                        </th>
                        <th>
                            <input type="text" name="webPage" class="form-control" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Número de contácto
                        </th>
                        <th>
                            <input type="text" name="contactNumber" class="form-control" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Correo electrónico
                        </th>
                        <th>
                            <input type="email" name="email" value="" class="form-control">
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
    $("#reg_yes").click(function () {
        $("#camera_comerce").show();
    });

    $("#reg_no").click(function () {
        $("#camera_comerce").hide();
    });
    $("#register_year").datepicker({
        dateFormat: "yy-mm-dd"
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
    setMap(place.geometry.location.lat(), place.geometry.location.lng())
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGNsm6WSTUNTdoPh4PSbxjkY8DrQU6zww&signed_in=true&region=co&libraries=places&callback=initAutocomplete"
        async defer></script>
