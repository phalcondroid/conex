
<?php echo $this->tag->form(array('services/createService', 'method' => 'post')); ?>

    <h2>Nuevo servicio</h2>

    <a href="<?php echo $this->url->get('services/index'); ?>" class="btn btn-danger pull-right">
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
                                        <?php echo $this->tag->image(array('img/ex1.jpg', 'style' => 'width : 180px; height : 160px;')); ?>
                                    </a>
                                </div>
                                <div class="col-xs-4 col-md-4">
                                    <a href="#" class="thumbnail">
                                        <?php echo $this->tag->image(array('img/ex2.jpg', 'style' => 'width : 180px; height : 160px;')); ?>
                                    </a>
                                </div>
                                <div class="col-xs-4 col-md-4">
                                    <a href="#" class="thumbnail">
                                        <?php echo $this->tag->image(array('img/ex3.jpg', 'style' => 'width : 180px; height : 160px;')); ?>
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
                            <select class="form-control" name="serviceType">
                                <option>......</option>
                                <?php foreach ($serviceType as $item) { ?>
                                    <option value="<?php echo $item->id_service_type; ?>">
                                        <?php echo $item->service_type; ?>
                                    </option>
                                <?php } ?>
                            </select>
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
                            Descripción
                        </th>
                        <th>
                            <textarea class="form-control" name="description" rows="8" cols="40"></textarea>
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
