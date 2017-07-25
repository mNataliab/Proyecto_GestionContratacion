<?php
require "../Controlador/PersonaController.php";
require "../Controlador/EmpresaController.php";
require "../Controlador/ContratosController.php";
if(isset($_SESSION['verificar'])&&$_SESSION['verificar']==true)
{
}else
{
    header("Location: 403.html");

}?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registro Licitacion</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

    <!-- Bootstrap -->
    <link rel="icon" href="assets/img/icono.png">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">

    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="assets/lib/onoffcanvas/onoffcanvas.css">

    <!-- animate.css stylesheet -->
    <!--link rel="stylesheet" href="assets/lib/animate.css/animate.css">
     <link rel="stylesheet" href="/assets/lib/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css">
    <link rel="stylesheet" href="/assets/lib/jquery.gritter/css/jquery.gritter.css">-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/themes/default/css/uniform.default.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>


    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

</head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <?php require("snippers/MenuSuperior.php");?>
                <!-- /#top -->
                <?php require ("snippers/MenuIzquierdo.php");?>
                    <!-- /#left -->
                 <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <style>
                                .form-control.col-lg-6 {
                                    width: 50% !important;
                                }

                            </style>
                                <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header class="dark">
                                    <div class="icons"><i class="fa glyphicon-user"></i></div>
                                    <h5>Registro Licitacion</h5>
                                    <!-- .toolbar -->
                                    <div class="toolbar">
                                        <nav style="padding: 8px;">
                                            <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                                                <i class="fa fa-minus"></i>
                                            </a>
                                            <a href="javascript:;" class="btn btn-default btn-xs full-box">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </nav>
                                    </div>            <!-- /.toolbar -->

                                </header>
                                <div id="collapse2" class="body">

                                    <?php if(!empty($_GET['respuesta'])){ ?>
                                        <?php if ($_GET['respuesta'] == "correcto"){ ?>
                                            <div class="correcto" id="correcto" title="Registro Exitoso" >
                                                <p> <i class="glyphicon glyphicon-ok-sign"></i>
                                                    La Licitacion  se ha creado correctamente</p>
                                            </div>
                                        <?php }else {?>
                                            <div class="error" id="error" title="Registro Fallido!" >
                                                <p><i class="glyphicon glyphicon-remove-sign"></i>&nbsp;Error! La Licitacion no se pudo crear correctamente intentalo nuevamente</p>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>

                                    <form class="form-horizontal" id="popup-validation"  enctype="multipart/form-data" action="../Controlador/PersonaController.php?action=crear" method="POST">



                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Ejecución de contrato</label>

                                            <div class=" col-lg-4">
                                                <input required class="validate[required,custom[date]] form-control" type="date"
                                                       data-date-format="aaaa/mm/dd" name="Ejecucion_Contrato" id="Ejecucion_Contrato"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Fecha Firma de Contratos</label>

                                            <div class=" col-lg-4">
                                                <input required class="validate[required,custom[date]] form-control" type="date"
                                                       data-date-format="aaaa/mm/dd" name="Fecha_firma_contrato" id="Fecha_firma_contrato"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Plazo de Ejecución</label>

                                            <div class=" col-lg-4">
                                                <input required class="validate[required,custom[date]] form-control" type="date"
                                                       data-date-format="aaaa/mm/dd" name="Plazo_Ejecucion_Contrato" id="Plazo_Ejecucion_Contrato"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Calificación</label>

                                            <div class=" col-lg-4">
                                                <input required placeholder="Calificacion" class="validate[required,custom[number]] form-control" type="number"
                                                       name="Calificacion" id="Calificacion"/>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Estado</label>
                                            <div class="col-lg-4">
                                                <select required name="Estado" id="Estado" class="validate[required] form-control">
                                                    <option value="Activo">Activo</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-group" name="idEmpresas" id="idEmpresas">

                                            <label class="control-label col-lg-4">Empresa</label>
                                            <div class="col-lg-4">
                                                <?php echo EmpresaController::selectEmpresas(); ?>
                                            </div>
                                        </div>

                                <div class="form-group" name="Contratos_Publicos" id="idContatos_Publicos">

                                    <label class="control-label col-lg-4">Contratos Publicos</label>
                                    <div class="col-lg-4">
                                        <?php echo ContratosController::selectContratos(); ?>
                                    </div>
                                </div>


                                        <div class="form-actions no-margin-bottom">
                                            <input type="submit" value="Enviar" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                                </div>
                        <!-- /.inner -->
                            </div>
                     <!-- /.outer -->
                    </div>
                <!-- /#content -->


                <div id="right" class="onoffcanvas is-right is-fixed bg-light" aria-expanded=false>
                    <a class="onoffcanvas-toggler" href="#right" data-toggle=onoffcanvas aria-expanded=false></a>
                    <br>
                    <br>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Warning!</strong> Best check yo self, you're not looking too good.
                    </div>
                    <!-- .well well-small -->
                    <div class="well well-small dark">
                        <ul class="list-unstyled">
                            <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                            <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                            <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                            <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
                        </ul>
                    </div>
                    <!-- /.well well-small -->
                    <!-- .well well-small -->
                    <div class="well well-small dark">
                        <button class="btn btn-block">Default</button>
                        <button class="btn btn-primary btn-block">Primary</button>
                        <button class="btn btn-info btn-block">Info</button>
                        <button class="btn btn-success btn-block">Success</button>
                        <button class="btn btn-danger btn-block">Danger</button>
                        <button class="btn btn-warning btn-block">Warning</button>
                        <button class="btn btn-inverse btn-block">Inverse</button>
                        <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
                        <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
                        <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
                        <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
                        <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
                        <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
                    </div>
                    <!-- /.well well-small -->
                    <!-- .well well-small -->
                    <div class="well well-small dark">
                        <span>Default</span><span class="pull-right"><small>20%</small></span>

                        <div class="progress xs">
                            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                        </div>
                        <span>Success</span><span class="pull-right"><small>40%</small></span>

                        <div class="progress xs">
                            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                        </div>
                        <span>warning</span><span class="pull-right"><small>60%</small></span>

                        <div class="progress xs">
                            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                        </div>
                        <span>Danger</span><span class="pull-right"><small>80%</small></span>

                        <div class="progress xs">
                            <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <!-- /#right -->

            </div>

            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2017 &copy; SIC-Sistema Integrado de Contratacion. v1.0</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>
            <script >
<<<<<<< HEAD
               $(document).ready(function() {
                    $('#Secretarias_idSecretarias').hide();
                    $('#Cargo').change(function() {
=======
                $(document).ready(function() {
                    $('#Secretaria').hide();
                    $('#Tipo_Usuario').change(function() {
>>>>>>> d1a223ec51db908e3df5e8632dc0fa161664ee0c
                        if($(this).val() == 'General'){
                            $('#Secretarias_idSecretarias').show();
                        }else if($(this).val() == 'Subgeneral'){
                            $('#Secretarias_idSecretarias').show();
                        }else if($(this).val() == 'Secretari@'){
                            $('#Secretarias_idSecretarias').show();
                        } else{
                            $('#Secretarias_idSecretarias').hide();
                        }
                    });

                });
            </script>


                <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/holder/2.4.1/holder.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/jquery.uniform.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
           <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>

            <!-- script src="/assets/lib/plupload/js/plupload.full.min.js"></script>
            <script src="/assets/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>
            <script src="/assets/lib/jquery.gritter/js/jquery.gritter.min.js"></script>
            <script src="/assets/lib/formwizard/js/jquery.form.wizard.js"></script> -->
                <script src="assets/lib/jquery-validation/jquery.validate.js"></script>

            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>

            <!-- Metis demo scripts -->
                <script src="assets/js/app.js"></script>
                <script>
                    $(function() {
                        Metis.formValidation();
                    });
                </script>

                <script src="assets/js/style-switcher.js"></script>

            <script src="assets/lib/jquery/jquery.js"></script>
            <script>
                $(function() {
                    Metis.formWizard();
                });
            </script>



            <script >

            </script>

        </body>

</html>
