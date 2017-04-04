
<a href="<?= $this->url->get('user/index') ?>" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<h1>New user</h1>

<br>

<?= $this->tag->form(['user/new', 'method' => 'post']) ?>

    <table class="table table-striped">
        <tbody>
            <tr>
                <th>
                    Role
                </th>
                <td>
                    <?= $userForm->render('id_role') ?>
                </td>
            </tr>
            <tr>
                <th>
                    Username
                </th>
                <td>
                    <?= $userForm->render('user') ?>
                </td>
            </tr>
            <tr>
                <th>
                    Password
                </th>
                <td>
                    <?= $userForm->render('password') ?>
                </td>
            </tr>
            <tr>
                <th>
                    Name
                </th>
                <td>
                    <?= $userForm->render('name') ?>
                </td>
            </tr>
            <tr>
                <th>
                    Identify
                </th>
                <td>
                    <?= $userForm->render('identify') ?>
                </td>
            </tr>
            <tr>
                <th>
                    Mobile phone
                </th>
                <td>
                    <?= $userForm->render('mobile_phone') ?>
                </td>
            </tr>
            <tr>
                <th>
                    Address
                </th>
                <td>
                    <?= $userForm->render('address') ?>
                </td>
            </tr>
            <tr>
                <th>
                    Country
                </th>
                <td>
                    <?= $userForm->render('country') ?>
                </td>
            </tr>
            <tr>
                <th>
                    City
                </th>
                <td>
                    <?= $userForm->render('city') ?>
                </td>
            </tr>
            <tr>
                <th>
                    Birthday
                </th>
                <td>
                    <?= $userForm->render('birthday') ?>
                </td>
            </tr>
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

<script type="text/javascript">
    window.onload = function () {
        $(function () {
            $("#birthday").datepicker({
                format: 'yyyy-mm-dd'
            });
        });
    }
</script>
