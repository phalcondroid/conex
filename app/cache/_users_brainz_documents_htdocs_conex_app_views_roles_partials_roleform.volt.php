<?= $this->tag->form([$type, 'method' => 'post']) ?>
    <table class="table table-striped">
        <tbody>
            <?php foreach ($roleForm as $element) { ?>
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
