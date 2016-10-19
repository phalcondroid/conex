
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

<div class="container" style="margin-top: 80px;">

    {{ flash.output() }}

    {{ content() }}
</div>
