<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Propiedades | <?php echo EMPRESA_NOMBRE; ?></title>

    <link href="<?php echo cdn_assets(); ?>/admon/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo cdn_assets(); ?>/admon/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo cdn_assets(); ?>/admon/css/animate.css" rel="stylesheet">
    <link href="<?php echo cdn_assets(); ?>/admon/css/style.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">

    <?php $this->menu_manager->generar_menu('menu_app_1'); ?>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="<?php echo base_url() . 'admon/login/salir'; ?>">
                            <i class="fa fa-sign-out"></i> Salir
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center m-t-lg">
                        <h1>
                            Simple example of second view
                        </h1>
                        <small>Writen in minor.html file.</small>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $this->cargar_elementos_manager->carga_con_lang('footers/footers_app_1'); ?>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo cdn_assets(); ?>/admon/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/admon/js/bootstrap.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo cdn_assets(); ?>/admon/js/inspinia.js"></script>
<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/pace/pace.min.js"></script>

</body>

</html>
