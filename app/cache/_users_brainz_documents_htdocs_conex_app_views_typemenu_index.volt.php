<a href="<?= $this->url->get('typemenu/new') ?>" class="btn btn-success pull-right">
    <i class="glyphicon glyphicon-plus"></i>
</a>

<h1>Administration secciones</h1>

<br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                Type Menu
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
        <?php foreach ($typeMenu as $item) { ?>
            <tr>
                <td>
                    <?= $item->type_menu ?>
                </td>
                <td>
                    <a href="<?= $this->url->get('typemenu/edit/' . $item->id_type_menu) ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td>
                    <a href="<?= $this->url->get('typemenu/delete/' . $item->id_type_menu) ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
