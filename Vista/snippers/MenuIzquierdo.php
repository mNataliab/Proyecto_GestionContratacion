
<div id="left">
    <div class="media user-media bg-dark dker">
        <div class="user-media-toggleHover">
            <span class="fa fa-user"></span>
        </div>
        <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
                <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
                <span class="label label-danger user-label">16</span>
            </a>

            <div class="media-body">
                <h5 class="media-heading">Archie</h5>
                <ul class="list-unstyled user-info">
                    <li><a href="">Administrator</a></li>
                    <li>Estado : <br>
                        <small><i class="fa fa-calendar"></i><?php echo date("d")." de ",date("F")." del ".date("Y");?>
                            </small>
                        <?php echo ($_SESSION['DataPersona']["Cargo"]) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #menu -->
    <ul id="menu" class="bg-blue dker">
        <li class="nav-header">Menu</li>
        <li class="nav-divider"></li>
        <li class="">
            <a href="javascript:;">
                <i class="fa fa-building "></i>
                <span class="link-title">Inicio</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="index.php">
                        <i class="fa  glyphicon-user"></i> Volver al inicio </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="fa fa-building "></i>
                <span class="link-title">Personas</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreatePersona.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar </a>
                </li>
                <li>
                    <a href="AdministrarPersona.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Administrar </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="javascript:;">
                <i class="fa fa-building "></i>
                <span class="link-title">Secretaria</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreateSecretaria.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="fa fa-building "></i>
                <span class="link-title">Contratos</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreateContratos.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar Contratos </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="fa fa-building "></i>
                <span class="link-title">Empresas</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreateEmpresas.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar Empresas      </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="fa fa-building "></i>
                <span class="link-title">Licitacion</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreateLicitacion.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar Licitaciones      </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /#menu -->
</div>
