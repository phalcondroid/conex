<a href="<?= $this->url->get('menu/new') ?>" class="btn btn-success pull-right">
    <i class="glyphicon glyphicon-plus"></i>
</a>

<h1>Administration Menus</h1>

<br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                Tipo
            </th>
            <th>
                Rol
            </th>
            <th>
                Name
            </th>
            <th>
                Label
            </th>
            <th>
                Menu item
            </th>
            <th>
                #
            </th>
            <th>
                #
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menus as $item) { ?>
            <tr>
                <td>
                    <?= $item->TypeMenu->type_menu ?>
                </td>
                <td>
                    <?= $item->Role->profile ?>
                </td>
                <td>
                    <?= $item->name ?>
                </td>
                <td>
                    <?= $item->label ?>
                </td>
                <td>
                    <?= $this->tag->form(['menuitem/index', 'method' => 'post']) ?>
                        <?= $this->tag->hiddenField(['', 'value' => $item->id_menu, 'name' => 'value']) ?>
                        <button class="btn btn-info" type="submit">
                            <i class="glyphicon glyphicon-tasks"></i>
                        </button>
                    <?= $this->tag->endForm() ?>
                </td>
                <td>
                    <a class="btn btn-warning" href="<?= $this->url->get('menu/edit/' . $item->id_menu) ?>">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td>
                    <?= $this->tag->form(['menu/delete', 'method' => 'post']) ?>
                        <?= $this->tag->hiddenField(['', 'value' => $item->id_role, 'name' => 'value']) ?>
                        <button class="btn btn-danger" type="submit">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    <?= $this->tag->endForm() ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
