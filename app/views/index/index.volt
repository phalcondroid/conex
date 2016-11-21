
<div class="loginColumns animated fadeInDown">
    <div class="row">

        <div class="col-md-6">
            <h2 class="font-bold">Bienvenido <br>emprendedor</h2>

            <p>
                Nuestra plataforma está lista para ti
            </p>

        </div>
        <div class="col-md-6">
            <div class="ibox-content">
                <form class="m-t" role="form" action="{{ url('index/index') }}" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="usuario" required="" name="user">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="contraseña" required="" name="pass">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Ingresar</button>

                    <a href="#">
                        <small>Olvidaste tu contraseña?</small>
                    </a>

                    <p class="text-muted text-center">
                        <small>No tienes cuenta?</small>
                    </p>
                    <a class="btn btn-sm btn-white btn-block" href="register.html">Solicita acceso eanista</a>
                </form>
                <p class="m-t">
                    <small>Ean software developers &copy; 2017</small>
                </p>
            </div>
        </div>
    </div>
</div>
