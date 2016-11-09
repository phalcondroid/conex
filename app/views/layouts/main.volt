
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
                <a href="#about">
                    {{ image("img/alarm.png", "style" : "width : 24px") }}
                    <span class="badge" style="background:red;" id="aggrementsBadge">0</span>
                </a>
            </li>
            <li>
                <a href="#about">
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
