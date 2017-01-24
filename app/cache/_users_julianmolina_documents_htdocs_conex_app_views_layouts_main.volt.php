
<?= $this->assets->outputCss('main') ?>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg" style="height:100%">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <i class="fa fa-reorder"></i>
                        </button>
                        <a href="<?= $this->url->get('deals/index') ?>" class="navbar-brand">
                            <img style="text-align:center; margin: 0 auto; width:40px; margin-top:-20%;" src="<?= $this->url->get('img/logo.svg') ?>"  />
                        </a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        <form class="nav navbar-form navbar-left" style="width: 60%; !important;" action="<?= $this->url->get('deals/index') ?>" method="post">
                            <div class="form-group" style="width: 60%; !important;">
                                <input type="text" name="searchProduct" class="form-control" style="width: 100%; !important;" placeholder="Productos, servicios, eventos...">
                            </div>
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="<?= $this->url->get('system/destroysession') ?>">
                                    <i class="fa fa-sign-out"></i> Salir
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown">
                                <a href="<?= $this->url->get('deals/index') ?>">
                                    Inicio
                                </a>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="<?= $this->url->get('deals/index') ?>">
                                    <i class="fa fa-bell"></i>
                                    <span class="label label-primary" id="aggrementsBadge">
                                        0
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                    <?php foreach ($lastDeals as $item) { ?>
                                        <li>
                                            <a>
                                                <div class="truncate">
                                                    <i class="fa fa-envelope fa-fw"></i>
                                                    <?= $item->message ?>
                                                    <span class="pull-right text-muted small">
                                                        <?= $item->created_at ?>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <i class="fa fa-envelope"></i>
                                    <span class="label label-warning" id="noticeBadge">
                                        <?= $countMessages ?>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <?php foreach ($messages as $item) { ?>
                                        <li>
                                            <div class="dropdown-messages-box">
                                                <a href="<?= $this->url->get('deals/messages') ?>" class="pull-left">
                                                    <img alt="image" class="img-circle" src="<?= $this->url->get($item->Users->avatar) ?>">
                                                </a>
                                                <div class="media-body">
                                                    <small class="pull-right"><?= $item->Users->name ?></small>
                                                    <strong>
                                                        <?= $item->message ?>
                                                    </strong>
                                                    <br>
                                                    <small class="text-muted">
                                                        <?= $item->created_at ?>
                                                    </small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                    <?php } ?>

                                    <li>
                                        <div class="text-center link-block">
                                            <a href="<?= $this->url->get('deals/messages') ?>">
                                                <i class="fa fa-envelope"></i> <strong>Ver todos</strong>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Menú <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <?php foreach ($mainMenu as $item) { ?>
                                        <li>
                                            <a href="<?= $this->url->get($item->name . '/' . $item->default) ?>">
                                                <?php if ($item->logo != '') { ?>
                                                    <?= $this->tag->image([$item->logo, 'style' => 'width : 24px']) ?>
                                                <?php } ?>
                                                <?= $item->label ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="">
                <?= $this->getContent() ?>
            </div>

        </div>
    </div>
</body>
