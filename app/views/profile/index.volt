
{{ form("profile/index", "method" : "post") }}
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
                                        {{ image('img/inovatio1.png', "style" : "width : 180px; height : 160px;") }}
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3 col-md-3">
                                    <input type="file" name="image" value="">
                                </div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            <input type="text" name="name" value="{{ user.name }}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Documento de identidad
                        </th>
                        <th>
                            <input type="text" name="identify" value="{{ user.identify }}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Teléfono móvil
                        </th>
                        <th>
                            <input type="text" name="phone" value="{{ user.phone }}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Ciudad de residencia
                        </th>
                        <th>
                            <div id="map" style="width : 300px; height:200px">

                            </div>
                            <input type="text" name="address" value="{{ user.address }}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Correo institucional
                        </th>
                        <th>
                            <input type="text" name="u_email" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Otros email
                        </th>
                        <th>
                            <input type="text" name="other_email" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Fecha de nacimiento
                        </th>
                        <th>
                            <input type="text" name="birthday" value="{{ user.birthday }}">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Tipo estudiante
                        </th>
                        <th>
                            <select class="btn" name="studentType">
                                {% for item in studentType %}
                                    <option value="{{ item.id_student_type }}">
                                        {{ item.student_type }}
                                    </option>
                                {% endfor %}
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Carrera
                        </th>
                        <th>
                            <label for="">
                                Ingeniería de sistemas
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

function initMap() {

    var mapDivE = document.getElementById('map');
    var map = new google.maps.Map(mapDivE, {
        center: {lat: 44.540, lng: -78.546},
        zoom: 8
    });
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGNsm6WSTUNTdoPh4PSbxjkY8DrQU6zww&callback=initMap"></script>
