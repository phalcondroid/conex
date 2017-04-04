<a href="{{ url("company/index")}}" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

{{ form("company/edit/" ~ idCompany, "method" : "post", "enctype" : "multipart/form-data") }}
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
                                        {{ image(company.getLogo(), "id" : "logobox", "style" : "width : 180px; height : 160px;") }}
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
                            <input type="text" name="name" class="form-control" value="{{ company.getName() }}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Descripción
                        </th>
                        <th>
                            <textarea name="description" id="description" class="form-control" rows="8" cols="40" style="width : 100%;">{{ company.getDescription() }}</textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Constitución legal
                        </th>
                        <th>
                            <select class="form-control" name="legalConstitution">
                                {% for item in legalConstitution %}
                                    {% set selected = "" %}
                                    {% if item.getIdLegalConstitution() == company.getIdLegalConstitution() %}
                                        {% set selected = "selected" %}
                                    {% endif %}
                                    <option {{ selected }} value="{{ item.getIdLegalConstitution() }}">
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
                                    {% set selected = "" %}
                                    {% if item.getIdCoverage() == company.getIdCoverage() %}
                                        {% set selected = "selected" %}
                                    {% endif %}
                                    <option {{ selected }} value="{{ item.getIdCoverage() }}">
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
                                    {% set selected = "" %}
                                    {% if item.getIdCompanyPosition() == company.getIdCompanyPosition() %}
                                        {% set selected = "selected" %}
                                    {% endif %}
                                    <option {{ selected }} value="{{ item.getIdCompanyPosition() }}">
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
                                    {% set selected = "" %}
                                    {% if item.getIdSizeCompany() == company.getIdSizeCompany() %}
                                        {% set selected = "selected" %}
                                    {% endif %}
                                    <option {{ selected }} value="{{ item.getIdSizeCompany() }}">
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

                                    {% set selected = "" %}
                                    {% if item.getIdCompanyAssets() == company.getIdCompanyAssets() %}
                                        {% set selected = "selected" %}
                                    {% endif %}

                                    <option {{ selected }} value="{{ item.getIdCompanyAssets() }}">
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

                                    {% set selected = "" %}
                                    {% if item.getIdEmployeeNumber() == company.getIdEmployeeNumber() %}
                                        {% set selected = "selected" %}
                                    {% endif %}

                                    <option {{ selected }} value="{{ item.getIdEmployeeNumber() }}">
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
                            <select class="form-control" name="ciiu">
                                {% for item in ciiuType %}
                                     <optgroup label="{{ item.ciiu_type }}">
                                         {% for itemCiiu in item.Ciiu %}

                                             {% set selected = "" %}
                                             {% if itemCiiu.id_ciiu == company.id_ciiu %}
                                                 {% set selected = "selected" %}
                                             {% endif %}

                                             <option {{ selected }} value="{{ itemCiiu.id_ciiu }}">
                                                 {{ itemCiiu.ciiu }}
                                             </option>
                                         {% endfor %}
                                     </optgroup>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>

                    {% set display_camera = "display: none" %}
                    {% set radio_yes = "" %}
                    {% set radio_no  = "checked='checked'" %}

                    {% if company.getComerceCameraYear() != "" %}
                        {% set display_camera = "display: " %}
                        {% set radio_yes = "checked='checked'" %}
                        {% set radio_no  = "" %}
                    {% endif %}

                    <tr>
                        <th>
                            Regístro en cámara de comercio
                        </th>
                        <th>
                            Si
                            <input {{ radio_yes }} type="radio" name="camera" id="reg_yes">
                            No
                            <input {{ radio_no }} type="radio" name="camera" id="reg_no">
                        </th>
                    </tr>
                    <tr id="camera_comerce" style="{{ display_camera }}">
                        <th>
                            Año de regístro
                        </th>
                        <th>
                            <input type="text" name="register_year" id="register_year" class="form-control" value="{{ company.getComerceCameraYear() }}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Dirección
                        </th>
                        <th>
                            <div id="map" style="width : 300px; height:200px">

                            </div>
                            <input type="text" name="address" id="address" class="form-control" value="{{ company.getAddress() }}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Página web
                        </th>
                        <th>
                            <input type="text" name="webPage" class="form-control" value="{{ company.getWebPage() }}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Número de contácto
                        </th>
                        <th>
                            <input type="text" name="contactNumber" class="form-control" value="{{ company.getContactNumber() }}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Correo electrónico
                        </th>
                        <th>
                            <input type="email" name="email" value="{{ company.getEmail() }}" class="form-control">
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align : center;">
                            <button type="submit" class="btn btn-success">
                                <i class="glyphicon glyphicon-floppy-disk"></i>
                                Actualizar
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
