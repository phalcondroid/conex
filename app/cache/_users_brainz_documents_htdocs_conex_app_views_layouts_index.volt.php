
<?= $this->tag->stylesheetLink('css/index.css') ?>

<style media="screen">
    .custom-alert {

        width: 75%;
        float: right;
        margin-top: 6%;
        margin-left: 1%;
        margin-right: 1%;
        margin-bottom: -6%;
    }
</style>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="background: #a4ba29; padding-left : 1px ; padding-right : 1px;">
            <?= $this->tag->image(['img/logo2.png', 'class' => 'logoClass']) ?>
        </a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
        <li class="active">
            <a href="#">Publicaciones</a>
        </li>
        <li>
            <a href="#about">Inversores</a>
        </li>
        <li>
            <a href="#contact">Vacantes</a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Contácto
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#">Action</a>
                </li>
                <li>
                    <a href="#">Another action</a>
                </li>
                <li>
                    <a href="#">Something else here</a>
                </li>
                <li role="separator" class="divider">
                </li>
                <li class="dropdown-header">
                    Nav header
                </li>
                <li>
                    <a href="#">Separated link</a>
                </li>
                <li>
                    <a href="#">One more separated link</a>
                </li>
            </ul>
        </li>
        </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<?= $this->flash->output() ?>

<?= $this->getContent() ?>
