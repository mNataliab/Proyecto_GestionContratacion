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
                                            <label class="control-label col-lg-4">Required</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="validate[required] form-control" name="req" id="req">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Select</label>
                                            <div class="col-lg-4">
                                                <select name="sport" id="sport" class="validate[required] form-control">
                                                    <option value="">Choose a sport</option>
                                                    <option value="option1">Tennis</option>
                                                    <option value="option2">Football</option>
                                                    <option value="option3">Golf</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Browser Default</label>
                                            <div class="col-lg-8"><input type="file"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Multiple Select</label>

                                            <div class="col-lg-4">
                                                <select name="sport2" id="sport2" multiple class="validate[required] form-control">
                                                    <option value="">Choose a sport</option>
                                                    <option value="option1">Tennis</option>
                                                    <option value="option2">Football</option>
                                                    <option value="option3">Golf</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Url</label>

                                            <div class=" col-lg-4">
                                                <input value="http://" class="validate[required,custom[url]] form-control" type="text"
                                                       name="url1" id="url1"/>
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
                                            <label class="control-label col-lg-4">Password</label>

                                            <div class=" col-lg-4">
                                                <input class="validate[required] form-control" type="password" name="pass1" id="pass1"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Confirm Password</label>

                                            <div class=" col-lg-4">
                                                <input class="validate[required,equals[pass1]] form-control" type="password" name="pass2"
                                                       id="pass2"/>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Minimum field size (6)</label>

                                            <div class=" col-lg-4">
                                                <input value="" class="validate[required,minSize[6]] form-control" type="text" name="minsize1"
                                                       id="minsize1"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Pre Defined Image</label>
                                            <div class="col-lg-8">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img data-src="holder.js/100%x100%" alt="...">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Maximum field size, optional</label>

                                            <div class=" col-lg-4">
                                                <input value="0123456789" class="validate[optional,maxSize[6]] form-control" type="text"
                                                       name="maxsize1" id="maxsize1"/>
                                                <span class="help-block">note that the field is optional - it won't fail if it has no value</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Number</label>

                                            <div class=" col-lg-4">
                                                <input value="-33.87a" class="validate[required,custom[number]] form-control" type="text"
                                                       name="numbe2r" id="number2"/>
                                                <span class="help-block">a signed floating number, ie: -3849.354, 38.00, 38, .77</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">IP</label>

                                            <div class=" col-lg-4">
                                                <input value="192.168.3." class="validate[required,custom[ipv4]] form-control" type="text"
                                                       name="ip" id="ip"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Date</label>

                                            <div class=" col-lg-4">
                                                <input value="201-12-01" class="validate[required,custom[date]] form-control" type="text"
                                                       name="date3" id="date3"/>
                                                <span class="help-block">ISO 8601 dates only YYYY-mm-dd</span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Date Earlier</label>

                                            <div class=" col-lg-4">
                                                <input value="2012/12/16" class="validate[custom[date],past[2012/09/13]] form-control"
                                                       type="text" name="past" id="past"/>
                                                <span class="help-block">Please enter a date ealier than 2012/09/13</span>
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


            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>


            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
