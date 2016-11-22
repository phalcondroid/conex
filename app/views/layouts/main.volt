
{{ assets.outputCss("main") }}

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg" style="height:100%">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <i class="fa fa-reorder"></i>
                        </button>
                        <a href="{{ url("deals/index") }}" class="navbar-brand">
                            <img style="text-align:center; margin: 0 auto; width:40px; margin-top:-20%;" src="{{ url("img/logo") }}"  />
                        </a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        <form class="nav navbar-form navbar-left" style="width: 60%; !important;" action="{{ url('deals/index') }}" method="post">
                            <div class="form-group" style="width: 60%; !important;">
                                <input type="text" name="searchProduct" class="form-control" style="width: 100%; !important;" placeholder="Productos, servicios, eventos...">
                            </div>
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="{{ url("system/destroysession") }}">
                                    <i class="fa fa-sign-out"></i> Salir
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="{{ url("deals/index") }}">
                                    <i class="fa fa-bell"></i>
                                    <span class="label label-primary" id="aggrementsBadge">
                                        0
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                    {% for item in lastDeals %}
                                        <li>
                                            <a>
                                                <div class="truncate">
                                                    <i class="fa fa-envelope fa-fw"></i>
                                                    {{ item.message }}
                                                    <span class="pull-right text-muted small">
                                                        {{ item.created_at }}
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                    {% endfor %}
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <i class="fa fa-envelope"></i>
                                    <span class="label label-warning" id="noticeBadge">
                                        {{ countMessages }}
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">
                                    {% for item in messages %}
                                        <li>
                                            <div class="dropdown-messages-box">
                                                <a href="{{ url("deals/messages")}}" class="pull-left">
                                                    <img alt="image" class="img-circle" src="{{ url(item.Users.avatar) }}">
                                                </a>
                                                <div class="media-body">
                                                    <small class="pull-right">{{ item.Users.name }}</small>
                                                    <strong>
                                                        {{ item.message }}
                                                    </strong>
                                                    <br>
                                                    <small class="text-muted">
                                                        {{ item.created_at }}
                                                    </small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                    {% endfor %}

                                    <li>
                                        <div class="text-center link-block">
                                            <a href="{{ url("deals/messages") }}">
                                                <i class="fa fa-envelope"></i> <strong>Ver todos</strong>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Menú <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    {% for item in mainMenu %}
                                        <li>
                                            <a href="{{ url(item.name ~ "/" ~ item.default) }}">
                                                {% if item.logo != "" %}
                                                    {{ image(item.logo , "style" : "width : 24px") }}
                                                {% endif %}
                                                {{ item.label }}
                                            </a>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="">
                {{ content() }}
            </div>
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2017
                </div>
            </div>
        </div>
    </div>
</body>

{#

{{ stylesheet_link("css/index.css") }}

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

<nav class="navbar navbar-default navbar-fixed-top" style="background : #0caaab; color : #ffffff">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="">
            {{ image("http://landing.universidadean.edu.co/img/logo.png", "style" : "width : 45px; margin-top : -10px;") }}
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
                <a href="{{ url("deals/index") }}">
                    {{ image("img/worldwide.png", "style" : "width : 24px") }}
                    <span class="badge" style="background:red;" id="noticeBadge">0</span>
                </a>
            </li>
            <li>
                <a>
                    {{ image("img/alarm.png", "style" : "width : 24px") }}
                    <span class="badge" style="background:red;" id="aggrementsBadge">0</span>
                </a>
            </li>
            <li>
                <a href="{{ url("deals/messages") }}">
                    {{ image("img/close-envelope.png", "style" : "width : 24px") }}
                    <span class="badge" style="background:red;" id="messagesBadge">0</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ image("img/menu.png", "style" : "width : 24px") }}
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    {% for item in mainMenu %}
                        <li>
                            <a href="{{ url(item.name ~ "/" ~ item.default) }}">
                                {% if item.logo != "" %}
                                    {{ image(item.logo , "style" : "width : 24px") }}
                                {% endif %}
                                {{ item.label }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<div class="row" style="background-color:#5c5c5c; margin-top: 50px; padding-left:5px; padding-right:5px;">
    <div class="col-md-11">
        <form class="navbar-form" role="search">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="glyphicon glyphicon-search"></i>
                </div>
                <input type="text" class="form-control"  style="width: 300px" id="exampleInputAmount" placeholder="buscar">
            </div>
            <div class="input-group">
                <select class="form-control" name="">
                    <option>Productos</option>
                    <option>Servicios</option>
                    <option>Anuncios</option>
                    <option>Eventos</option>
                </select>
            </div>
        </form>
    </div>
    <div class="col-md-1" style="text-align:center; vertical-align: text-top;">
        <a href="#" >
            {{ image("img/search.png", "style" : "width : 18px;") }}
        </a>
    </div>
</div>

<div class="container">

    {{ flash.output() }}

    {{ content() }}
</div>
#}
