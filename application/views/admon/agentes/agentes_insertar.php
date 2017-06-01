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
                    <?php echo get_bootstrap_alert(); ?>
                    <?php echo validation_errors("<div class='alert alert-danger'>", "</div>"); ?>
                    <?php echo form_open_multipart('admon/agentes/insercion', array('id' => 'postFrm', 'class' => 'form-horizontal')); ?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre completo*</label>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Nombre(s)"
                                   value="<?php echo set_value('nombre'); ?>" name="nombre"
                                   class="form-control"
                                   minlength="3" data-msg-minlength="Se requieren al menos {0} caracteres"
                                   data-msg-required="Campo requerido" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Apellido Paterno"
                                   value="<?php echo set_value('apellido_paterno'); ?>"
                                   name="apellido_paterno"
                                   class="form-control"
                                   minlength="3" data-msg-minlength="Se requieren al menos {0} caracteres"
                                   data-msg-required="Campo requerido" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Apellido Materno"
                                   value="<?php echo set_value('apellido_materno'); ?>"
                                   name="apellido_materno"
                                   class="form-control"
                                   minlength="3" data-msg-minlength="Se requieren al menos {0} caracteres"
                                   data-msg-required="Campo requerido" required>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Móvil*</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Teléfono Móvil"
                                   value="<?php echo set_value('tel_movil'); ?>"
                                   name="tel_movil" class="form-control"
                                   minlength="10" data-msg-minlength="Se requieren al menos {0} caracteres"
                                   data-msg-required="Campo requerido" required>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Fijo</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="Teléfono Fijo"
                                   value="<?php echo set_value('tel_fijo'); ?>"
                                   name="tel_fijo" class="form-control"
                                   minlength="8" data-msg-minlength="Se requieren al menos {0} caracteres">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" placeholder="Ext"
                                   value="<?php echo set_value('tel_fijo_ext'); ?>"
                                   name="tel_fijo_ext" class="form-control">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email*</label>
                        <div class="col-sm-10">
                            <input type="email" placeholder="Email"
                                   value="<?php echo set_value('email'); ?>"
                                   name="email"
                                   class="form-control" data-msg-email="Debe ser un email válido"
                                   data-msg-required="Campo requerido" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Redes Sociales</label>
                        <div class="col-sm-4">
                            <input type="url" placeholder="Link de Facebook"
                                   value="<?php echo set_value('facebook_profile'); ?>"
                                   name="facebook_profile" class="form-control"
                                   minlength="10" data-msg-minlength="Se requieren al menos {0} caracteres">
                        </div>
                        <div class="col-sm-3">
                            <input type="url" placeholder="Link de Twitter"
                                   value="<?php echo set_value('twitter_profile'); ?>"
                                   name="twitter_profile" class="form-control"
                                   minlength="10" data-msg-minlength="Se requieren al menos {0} caracteres">
                        </div>
                        <div class="col-sm-3">
                            <input type="url" placeholder="Link de LinkedIn"
                                   value="<?php echo set_value('linkedin_profile'); ?>"
                                   name="linkedin_profile" class="form-control"
                                   minlength="10" data-msg-minlength="Se requieren al menos {0} caracteres">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Imagen de perfil</label>
                        <div class="col-sm-10">
                            <input type="file" name="img_profile" class="form-control"
                                   accept="image/*">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descripción Español*</label>
                        <div class="col-sm-10">
                            <textarea rows="3" cols="30" placeholder="Descripción del agente en español"
                                      name="descripcion_es" class="form-control"
                                      minlength="5" data-msg-minlength="Se requieren al menos {0} caracteres"
                                      data-msg-required="Campo requerido" required><?php echo set_value('descripcion_es'); ?></textarea>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descripción Ingles*</label>
                        <div class="col-sm-10">
                                <textarea rows="3" cols="30" placeholder="Descripción del agente en ingles"
                                          name="descripcion_en" class="form-control"
                                          minlength="5" data-msg-minlength="Se requieren al menos {0} caracteres"
                                          data-msg-required="Campo requerido" required><?php echo set_value('descripcion_en'); ?></textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">¿Habilitado? </label>
                        <div class="col-sm-10">
                            <div>
                                <label>
                                    <input type="checkbox" name="estatus"
                                           value="1" <?php echo set_checkbox('estatus', '1'); ?>>
                                    Habilitar para que aparezca en el sitio web
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <a class="btn btn-white" href="<?php echo base_url('admon/agentes'); ?>">Cancelar</a>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
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

<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Jquery Validate -->
<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/validate/jquery.validate.min.js"></script>

<script>

    $(document).ready(function () {
        $("#postFrm").validate();
    });

</script>
</body>

</html>
