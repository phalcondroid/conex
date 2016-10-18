
<a href="<?= $this->url->get('menu/index') ?>" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<h1>Nuevo menu item</h1>

<br>

<?= $this->tag->form(['menu/new', 'method' => 'post']) ?>

    <table class="table table-striped">
        <tbody>
            <?php foreach ($menuForm as $element) { ?>
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
