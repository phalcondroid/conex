
<a href="{{ url("company/index")}}" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

{{ form("profile/company", "method" : "post", "multipart" : "formdata") }}
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
                                        {{ image('img/inovatio1.png', "style" : "width : 180px; height : 160px;") }}
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3 col-md-3">
                                    <input type="file" name="logo" value="">
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
                            <textarea name="description" class="form-control" rows="8" cols="40" style="width : 100%;"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Constitución legal
                        </th>
                        <th>
                            <select class="form-control" name="legalConstitution">
                                {% for item in legalConstitution %}
                                    <option value="{{ item.id_legal_contitution }}">
                                        {{ item.legal_constitution }}
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
                                    <option value="{{ item.id_size_company }}">
                                        {{ item.size_company }}
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
                                    <option value="{{ item.id_company_assets }}">
                                        {{ item.company_assets }}
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
                                    <option value="{{ item.id_employee_number }}">
                                        {{ item.employee_number }}
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
                                    <option value="{{ item.id_company_sector }}">
                                        {{ item.company_sector }}
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
                            <input type="radio" name="camera" value="1">
                            No
                            <input type="radio" name="camera" value="0">
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
                            Cargo ocupado en la empresa
                        </th>
                        <th>
                            <input type="text" name="position" class="form-control" value="">
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
                            <input type="text" name="email" value="" class="form-control">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Covertura
                        </th>
                        <th>
                            <select name="coverage" class="form-control">
                                <option value="local">
                                    Local
                                </option>
                                <option value="national">
                                    Nacional
                                </option>
                                <option value="regional">
                                    Regional
                                </option>
                                <option value="international">
                                    Internacional
                                </option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align : center;">
                            <a href="{{ url("company/save") }}" class="btn btn-success">
                                <i class="glyphicon glyphicon-floppy-disk"></i>
                                Guardar
                            </a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
{{ end_form() }}

<script type="text/javascript">

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
