
<a href="<?= $this->url->get('menuitem/index/' . $id_menu) ?>" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<h1>Nuevo menu item</h1>

<br>

<?= $this->tag->form(['menuitem/new', 'method' => 'post']) ?>

    <?= $this->tag->hiddenField(['', 'name' => 'id_menu', 'value' => $id_menu]) ?>

    <table class="table table-striped">
        <tbody>
            <?php foreach ($menuItemForm as $element) { ?>
                <tr>
                    <th>
                        <?= $element->getLabel() ?>
                    </th>
                    <td>
                        <input type="text" class="form-control" name="<?= $element->getName() ?>" >
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2" style="text-align:center">
                    <button type="submit" class="btn btn-success">
                        <i class=" glyphicon glyphicon-floppy-disk"></i>
                        &nbsp;
                        Guardar
                    </button>
                </td>
            </tr>
        </tfoot>
    </table>
<?= $this->tag->endForm() ?>
