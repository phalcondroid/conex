
<div class="container" style="margin-top: 80px;">
    <h2>Nuevo producto</h2>
    <a href="{{ url("services/index") }}" class="btn btn-danger pull-right">
        <i class="glyphicon glyphicon-share-alt"></i>
        Volver
    </a>
    <div class="panel panel-default" style="margin-top : 60px; background-color : #ffffff;">
        <div class="panel-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th style="width : 40%;">
                            Imagen
                        </th>
                        <th>
                            <div class="row">
                                <div class="col-xs-4 col-md-4">
                                    <a href="#" class="thumbnail">
                                        {{ image('img/inovatio1.png', "style" : "width : 180px; height : 160px;") }}
                                    </a>
                                </div>
                                <div class="col-xs-4 col-md-4">
                                    <a href="#" class="thumbnail">
                                        {{ image('img/inovatio1.png', "style" : "width : 180px; height : 160px;") }}
                                    </a>
                                </div>
                                <div class="col-xs-4 col-md-4">
                                    <a href="#" class="thumbnail">
                                        {{ image('img/inovatio1.png', "style" : "width : 180px; height : 160px;") }}
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3 col-md-3">
                                    <input type="file" name="name" value="">
                                </div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Tipo de producto
                        </th>
                        <th>
                            <select class="btn" style="width : 100%;">
                                <option>......</option>
                                <option>Tecnología</option>
                                <option>Alimentos</option>
                                <option>Medicinal</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Capacidad de producción
                        </th>
                        <th>
                            <select class="btn" style="width : 100%;">
                                <option>......</option>
                                <option>1 - 10</option>
                                <option>10 - 100</option>
                                <option>100 - 1000</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Descripción
                        </th>
                        <th>
                            <textarea style="width : 100%;"name="name" rows="8" cols="40"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Elogan
                        </th>
                        <th>
                            <textarea style="width : 100%;"name="name" rows="8" cols="40"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            ¿Que diferencia tu producto?
                        </th>
                        <th>
                            <textarea style="width : 100%;"name="name" rows="8" cols="40"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Otros detalles
                        </th>
                        <th>
                            <textarea style="width : 100%;"name="name" rows="8" cols="40"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align : center;">
                            <a href="{{ url("services/index") }}" class="btn btn-success">
                                <i class="glyphicon glyphicon-floppy-disk"></i>
                                Guardar
                            </a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
