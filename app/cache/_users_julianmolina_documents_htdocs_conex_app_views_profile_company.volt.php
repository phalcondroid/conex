
<?php echo $this->tag->form(array('profile/company', 'method' => 'post')); ?>
    <div class="panel panel-default" style="margin-top : 60px; background-color : #ffffff;">
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <h2>Perfil empresarial</h2>
                        </th>
                        <th>
                            <a href="<?php echo $this->url->get('services/index'); ?>" class="btn btn-success pull-right">
                                <i class="glyphicon glyphicon-plus"></i>
                                Agregar
                            </a>
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
                                        <?php echo $this->tag->image(array('img/inovatio1.png', 'style' => 'width : 180px; height : 160px;')); ?>
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
                            <input type="text" name="name" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Constitución legal
                        </th>
                        <th>
                            <select class="" name="">
                                <option>Persona Natural</option>
                                <option>Sociedad limitada</option>
                                <option>Sociedad anonima</option>
                                <option>Sociedad por acción simplificada</option>
                                <option>Sociedad en comandita</option>
                                <option>Sociedad de hecho</option>
                                <option>Empresa unipersonal</option>
                                <option>Empresa asociativa de trabajo</option>
                                <option>Entidad sin animo de lucro</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Tamaño de empresa
                        </th>
                        <th>
                            <select class="" name="">
                                <option>Micro</option>
                                <option>Pequeña</option>
                                <option>Mediana</option>
                                <option>Grande</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Activos de empresa
                        </th>
                        <th>
                            <select>
                                <option>0 a 500 SMMLV (Salario Mínimo Legal Vigente)</option>
                                <option>501 a  5000 SMMLV</option>
                                <option>5001 a  30000 SMMLV</option>
                                <option>Más de 30000 SMMLV</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Número de empleados
                        </th>
                        <th>
                            <select>
                                <option>1 - 10</option>
                                <option>11 - 50</option>
                                <option>51 - 200</option>
                                <option>Más de 200</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Sector al que pertenece
                        </th>
                        <th>
                            <select>
                                <option>Sección CIIU</option>
                                <option>División CIIU</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Regístro en cámara de comercio
                        </th>
                        <th>
                            Si
                            <input type="radio" name="cam" value="">
                            No
                            <input type="radio" name="cam" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Dirección
                        </th>
                        <th>
                            <div id="map" style="width : 300px; height:200px">

                            </div>
                            <input type="text" name="name" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Cargo ocupado en la empresa
                        </th>
                        <th>
                            <input type="text" name="name" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Página web
                        </th>
                        <th>
                            <input type="text" name="name" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Número de contácto
                        </th>
                        <th>
                            <input type="text" name="name" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Correo electrónico
                        </th>
                        <th>
                            <input type="text" name="name" value="">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Covertura
                        </th>
                        <th>
                            <select class="btn" name="">
                                <option>
                                    Local
                                </option>
                                <option>
                                    Nacional
                                </option>
                                <option>
                                    Regional
                                </option>
                                <option>
                                    Internacional
                                </option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Clientes principales
                        </th>
                        <th>
                            <textarea name="name" rows="8" cols="40" style="width : 100%;"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align : center;">
                            <a href="<?php echo $this->url->get('services/index'); ?>" class="btn btn-success">
                                <i class="glyphicon glyphicon-floppy-disk"></i>
                                Guardar
                            </a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php echo $this->tag->endForm(); ?>

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
