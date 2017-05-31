<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agentes | <?php echo EMPRESA_NOMBRE; ?></title>

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
                            Agentes disponible
                        </h1>
                        <small>Seleccine el agente para ver sus detalles y editarlos</small>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="ibox-title">
                    <h5>Datos del agente
                        <small>Los datos con <strong>*</strong> son obligatorios.</small>
                    </h5>
                </div>
                <div class="ibox-content">
                    <form method="get" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre completo*</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Nombre(s)" name="nombre" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" placeholder="Apellido Paterno" name="apellido_paterno" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" placeholder="Apellido Materno" name="apellido_materno" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Móvil*</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Teléfono Móvil" name="tel_movil" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fijo</label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Teléfono Fijo" name="tel_fijo" class="form-control">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" placeholder="Ext" name="tel_fijo_ext" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email*</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Redes Sociales</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Link de Facebook" name="facebook_profile" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" placeholder="Link de Twitter" name="twitter_profile" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" placeholder="Link de LinkedIn" name="linkedin_profile" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Imagen de perfil</label>
                            <div class="col-sm-10">
                                <input type="file" placeholder="Teléfono Móvil" name="img_profile" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Descripción Español*</label>
                            <div class="col-sm-10">
                                <textarea placeholder="Descripción del agente en español" name="descripcion_es" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Descripción Ingles*</label>
                            <div class="col-sm-10">
                                <textarea placeholder="Descripción del agente en ingles" name="descripcion_en" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">¿Habilitado? </label>
                            <div class="col-sm-10">
                                <div>
                                    <label>
                                        <input type="checkbox" name="estatus" value="1" checked>
                                        Habilitar para que aparezca en el sitio web
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="submit">Cancel</button>
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </div>
                        </div>
                    </form>
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

<script>

    $(document).ready(function () {

    });

</script>
</body>

</html>
