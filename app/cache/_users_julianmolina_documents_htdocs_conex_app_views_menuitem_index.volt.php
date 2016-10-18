<a href="<?= $this->url->get('menu/index') ?>" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<?= $this->tag->form(['menuitem/new', 'method' => 'post']) ?>
    <?= $this->tag->hiddenField(['', 'value' => $id_menu, 'name' => 'id_menu']) ?>
    <button  type="submit" class="btn btn-success pull-right">
        <i class="glyphicon glyphicon-plus"></i>
    </button>
<?= $this->tag->endForm() ?>

<h1>Menú item</h1>

<br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Label
            </th>
            <th>
                Logo
            </th>
            <th>
                Habilitado
            </th>
            <th>
                #
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menuitem as $item) { ?>
            <tr>
                <td>
                    <?= $item->menu_item ?>
                </td>
                <td>
                    <?= $item->label ?>
                </td>
                <td>
                    <?= $item->logo ?>
                </td>
                <td>
                    <?php if ($item->status == 1) { ?>

                        <?= $this->tag->form(['menuitem/available', 'method' => 'post']) ?>
                            <?= $this->tag->hiddenField(['', 'value' => $id_menu, 'name' => 'id_menu']) ?>
                            <?= $this->tag->hiddenField(['', 'value' => $item->id_menu_item, 'name' => 'id']) ?>
                            <?= $this->tag->hiddenField(['', 'value' => 0, 'name' => 'value']) ?>
                            <button class="btn btn-success" type="submit">
                                Si
                            </button>
                        <?= $this->tag->endForm() ?>

                    <?php } else { ?>

                        <?= $this->tag->form(['menuitem/available', 'method' => 'post']) ?>
                            <?= $this->tag->hiddenField(['', 'value' => $id_menu, 'name' => 'id_menu']) ?>
                            <?= $this->tag->hiddenField(['', 'value' => $item->id_menu_item, 'name' => 'id']) ?>
                            <?= $this->tag->hiddenField(['', 'value' => 1, 'name' => 'value']) ?>
                            <button class="btn btn-danger" type="submit">
                                No
                            </button>
                        <?= $this->tag->endForm() ?>

                    <?php } ?>
                </td>
                <td>
                    <a class="btn btn-warning" href="<?= $this->url->get('menuitem/edit/' . $item->id_menu_item) ?>">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
