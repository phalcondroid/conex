
<div class="container" style="margin-top: 80px;">
    <h2>Nuevo servicio</h2>
    <a href="<?= $this->url->get('services/index') ?>" class="btn btn-danger pull-right">
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
                                        <?= $this->tag->image(['img/ex1.jpg', 'style' => 'width : 180px; height : 160px;']) ?>
                                    </a>
                                </div>
                                <div class="col-xs-4 col-md-4">
                                    <a href="#" class="thumbnail">
                                        <?= $this->tag->image(['img/ex2.jpg', 'style' => 'width : 180px; height : 160px;']) ?>
                                    </a>
                                </div>
                                <div class="col-xs-4 col-md-4">
                                    <a href="#" class="thumbnail">
                                        <?= $this->tag->image(['img/ex3.jpg', 'style' => 'width : 180px; height : 160px;']) ?>
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
                            Tipo de servicio
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
                            Crear servicios
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <span>Columnas</span>
                            &nbsp;
                            <input type="text" id="columns" value="">
                        </th>
                        <th>
                            <span>Filas</span>
                            &nbsp;
                            <input type="text" id="rows" value="">
                            <button type="button" id="agregar" class="btn btn-primary pull-right">
                                <i class="glyphicon glyphicon-plus"></i>
                            </button>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="100">
                                            Describe cada item de tu paquete de servicios
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="tableService">

                                </tbody>
                            </table>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align : center;">
                            <a href="<?= $this->url->get('services/index') ?>" class="btn btn-success">
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

<script type="text/javascript">
    window.onload = function () {
        $(function () {
            $("#agregar").click(function () {

                console.log("kasjksajk");

                var cols = parseInt($("#columns").val());
                var rows = parseInt($("#rows").val());
                var tbodyService = $("#tableService");

                for (var i = 0; i < rows; i++) {
                    var tr = document.createElement("TR");
                    for (var j = 0; j < cols; j++) {

                        var td = document.createElement("TD");
                        var input = document.createElement("input");
                        input.setAttribute("type", "text");
                        td.appendChild(input);
                        tr.appendChild(td);

                    }
                    tbodyService.append(tr);
                }
            });
        });
    }
</script>
