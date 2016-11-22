
{{ assets.outputCss("landing-css") }}

<body id="page-top">
    <div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="text-align:center">
                        <img style="text-align:center; margin: 0 auto;" src="{{ url("img/logo") }}" style="width:30px" />
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top">Inicio</a></li>
                        <li><a class="page-scroll" href="#features">Nuestra red</a></li>
                        <li><a class="page-scroll" href="#team">Emprendimientos</a></li>
                        <li><a class="page-scroll label label-danger" href="#contact">Log/In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#inSlider" data-slide-to="0" class="active"></li>
            <li data-target="#inSlider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <br><br>
                        <h1>Bienvenido a<br/>
                            Conexión emprendedores<br/>
                            EAN</h1>
                        <p>Donde los emprendedores se hacen grandes</p>
                        <p>

                        </p>
                    </div>
                    <div class="carousel-image wow zoomIn">
                        <!--<img src="{{ url("img/laptop.png")}}" alt="" />-->
                    </div>
                </div>
                <!-- Set background for slide in css -->
                <div class="header-back one" style="background-color: black"></div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="carousel-caption blank">
                        <br>
                        <br>
                        <h1>Forjamos a los mejores emprendedores</h1>
                        <p>
                            Si has llegado hasta aquí, es porque estás interesado en tener una experiencia diferente durante
                            tu vida académica. Nosotros te ayudaremos a que se haga realidad
                        </p>
                    </div>
                </div>
                <!-- Set background for slide in css -->
                <div class="header-back two"></div>
            </div>
        </div>
        <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <section id="features" class="container services">
        <div class="row">
            <div class="col-sm-3">
                <h2>
                    Red empresarial
                </h2>
                <p>
                    Registramos a los emprendedores de la universidad ean en nuestra plataforma y les ayudamos a mejorar sus
                    ingresos y desarrollo empresarial.
                </p>
                <p>
                </p>
            </div>
            <div class="col-sm-3">
                <h2>
                    Conocimiento
                </h2>
                <p>
                    Tenemos registro de la información más relevante de nuestros pequeños y grandes emprendedores y así cada
                    tiene la capacidad de monitorear el mercado, proveedores y competencia.
                </p>
                <p>
                </p>
            </div>
            <div class="col-sm-3">
                <h2>
                    Conexiones
                </h2>
                <p>
                    Generamos por medio de algoritmos (Machine learning) conexiones exitosas entre emprendedores buscando siempre
                    los mejores acuerdos comerciales posibles entre ellos.
                </p>
                <p>
                </p>
            </div>
            <div class="col-sm-3">
                <h2>Acuerdos comerciales</h2>
                <p>
                    Siempre buscamos las necesidades y fortalezas de los emprendedores para poder generar los mejores acuerdos
                    comerciales de acuerdo a ellas y así poder generar crecimiento y ganancias.
                </p>
                <p></p>
            </div>
        </div>
    </section>

    <section  class="container features">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>
                    Más de 200 emprendedores<br/>
                    <span class="navy">
                        Haciendo acuerdos comerciales
                    </span>
                </h1>
                <p>
                    Y cada vez más
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center wow fadeInLeft">
                <div>
                    <i class="fa fa-mobile features-icon"></i>
                    <h2>Eventos</h2>
                    <p>
                        Anuncion de eventos reservados solo para emprendedores eanistas.
                    </p>
                </div>
                <div class="m-t-lg">
                    <i class="fa fa-bar-chart features-icon"></i>
                    <h2>Servicios comerciales</h2>
                    <p>Servicios que ofrencen nuestros emprendedores para nuestros emprendedores.</p>
                </div>
            </div>
            <div class="col-md-6 text-center  wow zoomIn" style="text-align:center">
                <img src="{{url('img/plantonic.jpg')}}" style="text-align:center; margin: 0 auto;" alt="dashboard" class="img-responsive">
            </div>
            <div class="col-md-3 text-center wow fadeInRight">
                <div>
                    <i class="fa fa-envelope features-icon"></i>
                    <h2>
                        Anuncios comerciales
                    </h2>
                    <p>
                        Demanda de servicios que son solicitados por nuestros emprendedores
                    </p>
                </div>
                <div class="m-t-lg">
                    <i class="fa fa-google features-icon"></i>
                    <h2>
                        Variedad de productos
                    </h2>
                    <p>
                        Todos los productos fabricados por nuestros emprendedores disponibles para ti.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Descrubre más posibilidades</h1>
                <p>Envíanos un email solicitando información o si tienes alguna pregunta.</p>
            </div>
        </div>
    </section>

    <section id="team" class="gray-section team">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Algunos de nuestros emprendedores</h1>
                    <p></p>
                </div>
            </div>
            <div class="row">
                {% for item in companies %}
                <div class="col-sm-4 wow fadeInLeft">
                    <div class="team-member">
                        <img src="{{ url(item.logo) }}" class="img-responsive img-circle img-small" alt="">
                        <h4>
                            <span class="navy">
                                {{ item.name }}
                            </span>
                        </h4>
                        <p>
                            {{ item.address }}<br>
                            {{ item.email }}<br>
                            {{ item.webpage }}
                        </p>
                        <ul class="list-inline social-icon">
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {% endFor %}
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Reportes</h1>
                    <p>Puedes consultar los reportes con todos los movimientos hechos en nuestra plataforma.</p>
                </div>
            </div>
            <div class="row features-block">
                <div class="col-lg-3 features-text wow fadeInLeft">
                    <small>
                        Reportes Gráficos
                    </small>
                    <h2>
                        Variedad de reportes
                    </h2>
                    <p>
                        Puedes obtener gráficas muy útiles de todos tus movimientos entrando a la sección de reportes,
                        Ahí podrás consultar varias opciones como ventas, convenios y demás.
                    </p>
                </div>
                <div class="col-lg-6 text-right m-t-n-lg wow zoomIn">
                    <img src="{{ url("img/iphone.jpg") }}" class="img-responsive" alt="dashboard">
                </div>
                <div class="col-lg-3 features-text text-right wow fadeInRight">
                    <small>Descargas</small>
                    <h2>PDF, Excel o vista HTML</h2>
                    <p>
                        También puedes descargar tus reportes en varios formatos para que puedas archivarlos o visualizarlos
                        posteriormente.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <section class="timeline gray-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>¿Cómo funciona?</h1>
                    <p>
                        Un flujo de trabajo de ejemplo
                    </p>
                </div>
            </div>
            <div class="row features-block">

                <div class="col-lg-12">
                    <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-briefcase"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>Publicación</h2>
                                <p>
                                    Los emprendedores publican servicios, anuncios, productos o eventos que con los que los demás
                                    emprendedores podrán interactuar.
                                </p>
                                <span class="vertical-date">
                                    Primera iteración <br/>
                                    <small> Oferta o demanda</small>
                                </span>
                            </div>
                        </div>

                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-file-text"></i>
                            </div>
                            <div class="vertical-timeline-content">
                                <h2>
                                    Conexión entre emprendedores
                                </h2>
                                <p>
                                    Los emprendedores buscan las publicaciones más interesantes entre una variedad de ellas
                                    Donde aparecerán disponibles para comenzar un acuerdo comercial
                                </p>
                                <span class="vertical-date"> <br/>
                                    <small>Inicio de acuerdos comerciales</small>
                                </span>
                            </div>
                        </div>

                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-cogs"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>Handshake</h2>
                                <p>
                                    La plataforma une a dos emprendedores por medio de una publicación y genera un acuerdo comercial
                                    para que los empresarios generen compras y ventas a través de la plataforma.
                                </p>
                                <span class="vertical-date"> Vinculo </span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <section id="contact" class="gray-bg">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Login</h1>
                    <p></p>
                </div>
            </div>
            {{ content() }}
        </div>
    </section>

    <section class="gray-section contact">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Contáctanos</h1>
                    <p>Si quieres saber más acerca de esta plataforma</p>
                </div>
            </div>
            <div class="row m-b-lg">
                <div class="col-lg-3 col-lg-offset-3">
                    <strong>
                        ©UNIVERSIDAD EAN:
                        <a href="http://snies.mineducacion.gov.co/consultasnies/verInstitucion?codigo=2812" target="_blank">SNIES 2812</a>
                    </strong>| Personería Jurídica
                    <strong>
                        <a href="http://institucion.universidadean.edu.co/documents/normatividad/Resolucion-No-2898-del-16-de-mayo-de-1969-personeria-juridica.pdf" target="_blank">
                            Res. nº. 2898
                        </a>
                    </strong> del
                    <strong>
                        <a href="http://www.minjusticia.gov.co/" target="_blank">Minjusticia</a>
                    </strong> - 16/05/69| Vigilada
                    <strong>
                        <a href="http://www.mineducacion.gov.co" target="_blank">Mineducación.</a>
                    </strong>
                </div>
                <div class="col-lg-4">
                    <p class="text-color">
                        <strong>
                            <a href="http://institucion.universidadean.edu.co/documents/normatividad/Resolucion-de-Acreditacion-No-12773-de-2013.PDF" target="_blank">
                                Res. nº. 12773
                            </a>
                        </strong> del<br>
                        <strong>
                            <a href="http://www.mineducacion.gov.co" target="_blank">Mineducación</a>
                        </strong> - 19/09/13,<br> vigencia 19/09/17
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="mailto:test@email.com" class="btn btn-primary">Envíanos un email</a>
                    <p class="m-t-sm">
                        Siguenos en:
                    </p>
                    <ul class="list-inline social-icon">
                        <li>
                            <a href="https://twitter.com/UniversidadEAN">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#https://www.facebook.com/UniversidadEANColombia">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/user/PortalUEAN">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/universidad-ean">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/u/0/+universidadean/posts">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                    <p>
                        <strong>&copy; Universidad EAN</strong><br/>
                        <address>
                            <small>
                                <strong>El Nogal:</strong> Cl. 79 nº. 11 - 45
                                <strong>Av. Chile: </strong>Cl. 71 nº. 9 - 84 - Bogotá D.C., Cundinamarca, Colombia, Suramérica |
                                <strong>Línea gratuita nacional:</strong> 01 8000 93 1000
                                <strong>Centro de contacto en Bogotá: </strong>+(57-1) 593 6464 |
                                <strong>E-mail: </strong><a href="mailto:informacion@universidadean.edu.co">informacion@universidadean.edu.co</a>
                            </small>
                            |
                            <span>
                                <a href="http://universidadean.edu.co/seccion/privacidad.html">
                                    Aviso de Privacidad
                                </a>
                            </span>
                        </address>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{ assets.outputCss("landing-css") }}
    {{ assets.outputCss("font") }}
    {{ assets.outputJs("landing") }}
</body>
