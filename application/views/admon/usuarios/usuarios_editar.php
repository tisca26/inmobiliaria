<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Usuarios | <?php echo EMPRESA_NOMBRE; ?></title>

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
                            Usuarios disponibles
                        </h1>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="ibox-title">
                    <h5>Datos del usuario
                        <small>Los datos con <strong>*</strong> son obligatorios.</small>
                    </h5>
                </div>
                <div class="ibox-content">
                    <?php echo get_bootstrap_alert(); ?>
                    <?php echo validation_errors("<div class='alert alert-danger'>", "</div>"); ?>
                    <?php echo form_open_multipart('admon/usuarios/edicion', array('id' => 'postFrm', 'class' => 'form-horizontal')); ?>
                    <input type="hidden" name="usuarios_id" value="<?php echo $usuario->usuarios_id; ?>">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre completo*</label>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Nombre(s)"
                                   value="<?php echo set_value('nombre', $usuario->nombre); ?>" name="nombre"
                                   class="form-control"
                                   minlength="3" data-msg-minlength="Se requieren al menos {0} caracteres"
                                   data-msg-required="Campo requerido" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Apellidos"
                                   value="<?php echo set_value('apellidos', $usuario->apellidos); ?>"
                                   name="apellidos"
                                   class="form-control"
                                   minlength="3" data-msg-minlength="Se requieren al menos {0} caracteres"
                                   data-msg-required="Campo requerido" required>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Username*</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Username, utilizado en el login"
                                   value="<?php echo set_value('username', $usuario->username); ?>" name="username"
                                   class="form-control"
                                   minlength="3" data-msg-minlength="Se requieren al menos {0} caracteres"
                                   data-msg-required="Campo requerido" required>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Contraseña</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder="Contraseña (deje en blanco para no modificarla)"
                                   value="" name="password" id="password"
                                   class="form-control"
                                   minlength="3" data-msg-minlength="Se requieren al menos {0} caracteres">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" placeholder="Confirmar contraseña (deje en blanco para no modificarla)"
                                   value="" name="repassword"
                                   class="form-control"
                                   data-rule-equalTo="#password" data-msg-equalTo="Las contraseñas deben concidir">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email*</label>
                        <div class="col-sm-10">
                            <input type="email" placeholder="Email"
                                   value="<?php echo set_value('email', $usuario->email); ?>"
                                   name="email"
                                   class="form-control" data-msg-email="Debe ser un email válido"
                                   data-msg-required="Campo requerido" required>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">¿Habilitado? </label>
                        <div class="col-sm-10">
                            <div>
                                <label>
                                    <input type="checkbox" name="estatus"
                                           value="1" <?php echo set_checkbox('estatus', '1', (bool)$usuario->estatus); ?>>
                                    Habilitar para que pueda ingresar al sistema
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <a class="btn btn-white" href="<?php echo base_url('admon/usuarios'); ?>">Cancelar</a>
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
