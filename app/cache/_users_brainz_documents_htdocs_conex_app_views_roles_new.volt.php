
<a href="<?= $this->url->get('roles/index') ?>" class="btn btn-danger pull-right">
    <i class="glyphicon glyphicon-backward"></i>
</a>

<h1>Nuevo rol</h1>

<br>

<?= $this->partial('roles/partials/roleForm', ['type' => 'roles/new']) ?>
