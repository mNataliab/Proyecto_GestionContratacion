<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Metis</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
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
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">
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
                <div id="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header class="dark">
                                    <div class="icons"><i class="fa fa-check"></i></div>
                                    <h5>Popup Validation</h5>
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
                                    <form class="form-horizontal" id="popup-validation">


                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nombre</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="validate[required] form-control" name="req" id="req">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Apellido</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="validate[required] form-control" name="req" id="req">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Tipo Documento</label>
                                            <div class="col-lg-4">
                                                <select required name="sport" id="sport" class="validate[required] form-control">
                                                    <option value=""></option>
                                                    <option value="C.C">Cedula Ciudadina</option>
                                                    <option value="T.I">Tarjeta Identidad</option>
                                                    <option value="R.C">Registro Civil</option>
                                                    <option value="C.E">Cedula Extranjera</option>
                                                    <option value="Otros">Otros</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">N° Documento</label>

                                            <div class=" col-lg-4">
<<<<<<< HEAD
                                                <input class="validate[required,custom[ipv4]] form-control" type="text"
=======
                                                <input value="Documento" required class="validate[required,custom[ipv4]] form-control" type="number"
>>>>>>> 6f435dd327c5877ee338b28db24d7e0a4b591bef
                                                       name="Documento" id="Documento"/>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Fecha Nacimiento</label>

                                            <div class=" col-lg-4">
                                                <input value="2017-12-01" class="validate[required,custom[date]] form-control" type="text"
                                                       name="date3" id="date3"/>
                                                <span class="help-block">Solamente YYYY-mm-dd</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Genero</label>
                                            <div class="col-lg-4">
                                                <select name="sport" id="sport" class="validate[required] form-control">
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Telefono</label>

                                            <div class=" col-lg-4">
                                                <input value="-33.87a" class="validate[required,custom[number]] form-control" type="text"
                                                       name="numbe2r" id="number2"/>
                                                <span class="help-block">a signed floating number, ie: -3849.354, 38.00, 38, .77</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Direccion</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="validate[required] form-control" name="req" id="req">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-lg-4">E-mail</label>

                                            <div class=" col-lg-4">
                                                <input class="validate[required,custom[email]] form-control" type="text" name="email1"
                                                       id="email1"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Usuario</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="validate[required] form-control" name="req" id="req">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Contraseña</label>

                                            <div class=" col-lg-4">
                                                <input class="validate[required] form-control" type="password" name="pass1" id="pass1"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Confirmar Contraseña</label>

                                            <div class=" col-lg-4">
                                                <input class="validate[required,equals[pass1]] form-control" type="password" name="pass2"
                                                       id="pass2"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Numero de Registro Profesional</label>

                                            <div class=" col-lg-4">
                                                <input value="-33.87a" class="validate[required,custom[number]] form-control" type="text"
                                                       name="numbe2r" id="number2"/>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Cargo</label>
                                            <div class="col-lg-4">
                                                <select name="sport" id="sport" class="validate[required] form-control">
                                                    <option value="General">General</option>
                                                    <option value="Subgeneral">Subgeneral</option>
                                                    <option value="Secreterai@">Secretari@</option>
                                                    <option value="Administrador">Administrador</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Contrato</label>
                                            <div class="col-lg-8"><input type="file"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Foto</label>
                                            <div class="col-lg-8">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">

                                                    <div aria-required="true" class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;" ></div>
                                                    <div>
                                                        <span ><span class="fileinput-new"></span><span class="fileinput-exists"></span><input type="file" name="..."></span>
                                                        <br>
                                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Cambiar imagen</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Estado</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="validate[required] form-control" name="req" id="req" value="Activo" readonly >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Secretaria</label>
                                            <div class="col-lg-4">
                                                <select name="sport" id="sport" class="validate[required] form-control">
                                                </select>
                                            </div>
                                        </div>



                                        </div>

                                        <div class="form-actions no-margin-bottom">
                                            <input type="submit" value="Validate" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
                        </div>
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                 </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2017 &copy; Metis Bootstrap Admin Template v2.4.2</p>
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


                     <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
                     <script src="//cdnjs.cloudflare.com/ajax/libs/holder/2.4.1/holder.js"></script>
                     <script src="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/jquery.uniform.min.js"></script>
                     <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
                     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>
<<<<<<< HEAD
                <script src="assets/lib/jquery-validation/jquery.validate.js"></script>
=======
                <script src="validator/validator.js"></script>
>>>>>>> 6f435dd327c5877ee338b28db24d7e0a4b591bef


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>


            <script src="assets/js/style-switcher.js"></script>



                <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
