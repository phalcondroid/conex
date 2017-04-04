
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
                            <img style="text-align:center; margin: 0 auto; width:40px; margin-top:-20%;" src="{{ url("img/logo.svg") }}"  />
                        </a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="{{ url("system/destroysession") }}">
                                    <i class="fa fa-sign-out"></i> Salir
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
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

        </div>
    </div>
</body>
