<a href="<?= $this->url->get('roles/new') ?>" class="btn btn-success pull-right">
    <i class="glyphicon glyphicon-plus"></i>
</a>

<h1>Administration Roles</h1>

<br><br>

<?= $this->getContent() ?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Dirección por defecto
            </th>
            <th>

            </th>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($roles as $item) { ?>
            <tr>
                <td>
                    <?= $item->profile ?>
                </td>
                <td>
                    <?= $item->default_redirect ?>
                </td>
                <td>
                    <a class="btn btn-warning pull-right" href="<?= $this->url->get('roles/edit/' . $item->id_role) ?>">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td>
                    <?= $this->tag->form(['roles/delete', 'method' => 'post']) ?>
                        <?= $this->tag->hiddenField(['', 'value' => $item->id_role, 'name' => 'value']) ?>
                        <button class="btn btn-danger pull-right" type="submit">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    <?= $this->tag->endForm() ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
