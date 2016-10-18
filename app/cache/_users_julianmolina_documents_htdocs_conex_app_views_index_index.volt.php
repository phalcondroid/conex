<style media="screen">
    html {
        background : url('/emprendedores/img/bg_empresa.jpg');
    }
</style>
<!-- Begin page content -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <div class="panel panel-default" style="margin-top : 150px; background-color : #e6e6e6;">
                <div class="panel-body">
                    <div class="" style="background-color : #444444; margin : -16px;">
                        <?= $this->tag->image(['http://ean.edu.co/images/layout/logo.svg', 'style' => 'width : 70px; margin : 20px;']) ?>
                    </div>
                    <form class="form-horizontal" style="margin-top : 45px; " action="<?= $this->url->get('index/index') ?>" method="post">
                        <div class="form-group" style="margin-left : 15px; margin-rigth:15px;">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="user" id="exampleInputAmount" placeholder="Usuario">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-left : 15px; margin-rigth:25px;">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </div>
                                    <input type="password" class="form-control" name="pass" id="exampleInputAmount" placeholder="Contraseña">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12" style="margin-left : 25px; margin-right: 25px;">
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-left : 15px; margin-right:15px;">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success" id="login">
                                    <i class="glyphicon glyphicon-floppy-disk"></i>
                                    Ingresar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
  <div class="container">
    <p class="text-muted">
        Universidad EAN 2016, Julián Arturo Molina Castiblanco
    </p>
  </div>
</footer>

<script type="text/javascript">
    window.onload = function () {

    }
</script>
