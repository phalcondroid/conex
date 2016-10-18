
<a href="<?= $this->url->get('roles/index') ?>" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<h1>Edit rol</h1>

<br>

<?= $this->getContent() ?>

<?= $this->tag->form(['roles/edit/' . $idRole, 'method' => 'post']) ?>

    <?= $roleForm->render('id_role') ?>

    <table class="table table-striped">
        <tbody>
            <tr>
                <td>
                    Profile
                </td>
                <td>
                    <?= $roleForm->render('profile') ?>
                </td>
            </tr>
            <tr>
                <td>
                    Dirección por defecto
                </td>
                <td>
                    <?= $roleForm->render('default_redirect') ?>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2" style="text-align:center">
                    <button type="submit" class="btn btn-success">
                        <i class=" glyphicon glyphicon-floppy-disk"></i>
                        &nbsp;
                        Actualizar
                    </button>
                </td>
            </tr>
        </tfoot>
    </table>
<?= $this->tag->endForm() ?>
