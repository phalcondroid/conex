<link rel="stylesheet" href="css/index.css">

<style media="screen">
    html {
        background : #f8f8f8;
    }
    body {
        background : transparent;
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
        <a class="navbar-brand" href="#" style="">
            <?php echo $this->tag->image(array('img/logo', 'style' => 'width : 45px; margin-top : -10px;')); ?>
        </a>

    </div>
    <div id="navbar" class="collapse navbar-collapse navbar-left">
        <ul class="nav navbar-nav">
            <li class="">
                <a href="#">
                    Conexión emprendedores
                </a>
            </li>
        </ul>
    </div>
    <div id="navbar" class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
            <li class="">
                <a href="#">
                    <?php echo $this->tag->image(array('img/worldwide.png', 'style' => 'width : 24px')); ?>
                </a>
            </li>
            <li>
                <a href="#about">
                    <?php echo $this->tag->image(array('img/ring.png', 'style' => 'width : 24px')); ?>
                </a>
            </li>
            <li>
                <a href="#about">
                    <?php echo $this->tag->image(array('img/speech-bubble.png', 'style' => 'width : 24px')); ?>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo $this->tag->image(array('img/menu.png', 'style' => 'width : 24px')); ?>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo $this->url->get('services/index'); ?>">
                            <?php echo $this->tag->image(array('img/calendar.png', 'style' => 'width : 24px')); ?>
                            Crear evento
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->url->get('services/index'); ?>">
                            <?php echo $this->tag->image(array('img/barcode.png', 'style' => 'width : 24px')); ?>
                            Crear producto
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->url->get('services/index'); ?>">
                            <?php echo $this->tag->image(array('img/vacancy-sign.png', 'style' => 'width : 24px')); ?>
                            Crear vacante
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->url->get('services/index'); ?>">
                            <?php echo $this->tag->image(array('img/truck.png', 'style' => 'width : 24px')); ?>
                            Crear servicio
                        </a>
                    </li>
                    <li role="separator" class="divider">
                    </li>
                    <li class="dropdown-header">
                        Configuración
                    </li>
                    <li>
                        <a href="#">Mi perfil</a>
                    </li>
                    <li>
                        <a href="#">Empresarial</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<style media="screen">
    html {
        background : #f8f8f8;
        min-height: 100% !important;
        height: 100%;
    }
</style>
<?php echo $this->getContent(); ?>
