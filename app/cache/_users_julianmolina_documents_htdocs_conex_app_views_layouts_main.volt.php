<link rel="stylesheet" href="css/index.css">

<style media="screen">
    html {
        background : #f8f8f8;
        min-height: 100% !important;
        height: 100%;
    }
    body {
        background : transparent;
        margin-bottom: 60px;
    }
</style>

<nav class="navbar navbar-default navbar-fixed-top" style="background : #2eab11; color : #ffffff">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="">
            <?php echo $this->tag->image(array('http://landing.universidadean.edu.co/img/logo.png', 'style' => 'width : 45px; margin-top : -10px;')); ?>
        </a>

    </div>
    <div id="navbar" class="collapse navbar-collapse navbar-left">
        <ul class="nav navbar-nav">
            <li class="">
                <a href="#" style="color : #ffffff">
                    Conexión emprendedores
                </a>
            </li>
        </ul>
    </div>
    <div id="navbar" class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
            <li class="">
                <a href="<?php echo $this->url->get('deals/index'); ?>">
                    <?php echo $this->tag->image(array('img/worldwide.png', 'style' => 'width : 24px')); ?>
                    <span class="badge" style="background:red;" id="noticeBadge">0</span>
                </a>
            </li>
            <li>
                <a href="#about">
                    <?php echo $this->tag->image(array('img/alarm.png', 'style' => 'width : 24px')); ?>
                    <span class="badge" style="background:red;" id="aggrementsBadge">0</span>
                </a>
            </li>
            <li>
                <a href="#about">
                    <?php echo $this->tag->image(array('img/close-envelope.png', 'style' => 'width : 24px')); ?>
                    <span class="badge" style="background:red;" id="messagesBadge">0</span>
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
                            <?php echo $this->tag->image(array('img/cart.png', 'style' => 'width : 24px')); ?>
                            Crear anuncio
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
                        <a href="<?php echo $this->url->get('profile/index'); ?>">Mi perfil</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->url->get('profile/company'); ?>">Empresarial</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->url->get('reports/sales'); ?>">Reportes</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->url->get(''); ?>">Cerrar sesión</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container" style="margin-top: 80px;">

    <?php echo $this->flash->output(); ?>

    <?php echo $this->getContent(); ?>
</div>
