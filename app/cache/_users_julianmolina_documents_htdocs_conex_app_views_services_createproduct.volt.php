
<?= $this->tag->form(['services/createProduct', 'method' => 'post', 'enctype' => 'multipart/form-data']) ?>

    <h2>Nuevo producto</h2>

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
                                        <?= $this->tag->image(['img/emptyimg.png', 'style' => 'width : 180px; height : 160px;']) ?>
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
                            <input type="text" name="name" class="form-control">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Tipo de producto
                        </th>
                        <th>
                            <select class="form-control" name="productType">
                                <option>......</option>
                                <?php foreach ($productType as $item) { ?>
                                    <option value="<?= $item->id_product_type ?>">
                                        <?= $item->product_type ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Capacidad de producción
                        </th>
                        <th>
                            <select class="form-control" name="productCapacity">
                                <option>......</option>
                                <?php foreach ($productCapacity as $item) { ?>
                                    <option value="<?= $item->id_product_capacity ?>">
                                        <?= $item->product_capacity ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Descripción
                        </th>
                        <th>
                            <textarea name="description" id="description" rows="10" cols="40" ></textarea>
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
<?= $this->tag->endForm() ?>

<script>
$(function () {
    $("#description").jqte();
});
</script>
