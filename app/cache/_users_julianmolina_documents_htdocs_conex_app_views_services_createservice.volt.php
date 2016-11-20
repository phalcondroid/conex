
<?= $this->tag->form(['services/createService', 'method' => 'post']) ?>

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
                        <th>
                            Tipo de servicio
                        </th>
                        <th>
                            <select class="form-control" name="serviceType">
                                <option>......</option>
                                <?php foreach ($serviceType as $item) { ?>
                                    <option value="<?= $item->id_service_type ?>">
                                        <?= $item->service_type ?>
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
                            <input type="text" name="name" value="" class="form-control">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Descripción
                        </th>
                        <th>
                            <textarea class="form-control" name="description" id="description" rows="8" cols="40"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Slogan
                        </th>
                        <th>
                            <textarea class="form-control" name="slogan" rows="8" cols="40"></textarea>
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
    $(function () {
        var img1 = $('#imageupload1');
        img1.imageupload();

        var img2 = $('#imageupload2');
        img2.imageupload();

        var img3 = $('#imageupload3');
        img3.imageupload();

        $("#description").jqte();
    });
</script>
