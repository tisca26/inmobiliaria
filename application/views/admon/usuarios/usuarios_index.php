<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Usuarios | <?php echo EMPRESA_NOMBRE; ?></title>

    <link href="<?php echo cdn_assets(); ?>/admon/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo cdn_assets(); ?>/admon/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="<?php echo cdn_assets(); ?>/admon/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <link href="<?php echo cdn_assets(); ?>/admon/css/animate.css" rel="stylesheet">
    <link href="<?php echo cdn_assets(); ?>/admon/css/style.css" rel="stylesheet">

    <style>
        .usuario_inhabilitado {
            background-color: rgb(237, 86, 102) !important;
            color: #f1f1f1 !important;
        }

    </style>
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
                            Usuarios registrados
                        </h1>
                        <span>Seleccine el usuario para ver sus detalles y editarlos o 
                            <a class="btn btn-info btn-xs" href="<?php echo base_url('admon/usuarios/insertar') ?>">Genere uno nuevo aquí</a>
                        </span>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <?php echo get_bootstrap_alert(); ?>
                <?php foreach ($usuarios as $usuario): ?>
                    <div class="col-lg-3">
                        <div class="contact-box center-version">
                            <a href="<?php echo base_url('admon/usuarios/editar/' . $usuario->usuarios_id) ?>"
                               class="cuadro_usuario <?php echo ($usuario->estatus == '1') ? '' : 'usuario_inhabilitado' ?>">
                                <img alt="<?php echo EMPRESA_NOMBRE; ?>" class="img-circle"
                                     src="<?php echo cdn_assets(). '/img/agentes/logo_base.png'; ?>">

                                <h3 class="m-b-xs">
                                    <strong><?php echo "$usuario->nombre $usuario->apellidos"; ?></strong>
                                </h3>

                                <div class="font-bold">Usuario de Sistema</div>
                                <address class="m-t-md">
                                    <strong><?php EMPRESA_NOMBRE; ?></strong><br>
                                    <?php echo $usuario->email; ?><br>
                                </address>

                            </a>
                            <div class="contact-box-footer">
                                <div class="m-t-xs btn-group text-center">
                                    <button class="btn btn-danger btn-sm <?php echo ($usuario->estatus == '1') ? 'inhabilitar' : 'habilitar' ?>"
                                            type="button" data-id="<?php echo $usuario->usuarios_id; ?>"><i
                                                class="fa fa-warning"></i>
                                        <span class="bold"><?php echo ($usuario->estatus == '1') ? 'Inhabilitar' : 'Habilitar' ?></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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

<!-- Sweet alert -->
<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/sweetalert/sweetalert.min.js"></script>
<script>

    $(document).ready(function () {

        $(document).on("click", ".inhabilitar", function () {
            var btn = $(this);
            swal({
                    title: "¿Desea borrarlo?",
                    text: "El usuario quedará inhabilitado",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Si, inhabilítalo",
                    cancelButtonText: "¡No, cancelar!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            method: "POST",
                            data: {
                                'usuarios_id': btn.attr('data-id')
                            },
                            url: '<?php echo base_url('admon/usuarios/inhabilitar_json')?>',
                            dataType: 'json'
                        }).done(function (data) {
                            var obj = JSON.stringify(data);
                            swal("¡Inhabilitado!", "El usuario ha sido habilitado.", "success");
                            btn.closest('div.contact-box').find('a.cuadro_usuario').addClass("usuario_inhabilitado");
                            btn.find('span.bold').html('Habilitar');
                            btn.removeClass('inhabilitar');
                            btn.addClass('habilitar');
                        }).fail(function (jqXHR, textStatus) {
                            swal("Error", "Hubo un error al borrar " + textStatus, "error");
                        });
                    } else {
                        swal("Cancelado", "No se realizó ningún cambio", "error");
                    }
                }
            );
        });

        $(document).on("click", ".habilitar", function () {
            var btn = $(this);
            swal({
                    title: "¿Desea habilitarlo?",
                    text: "El usuario quedará habilitado",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Si, habilítalo",
                    cancelButtonText: "¡No, cancelar!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            method: "POST",
                            data: {
                                'usuarios_id': btn.attr('data-id')
                            },
                            url: '<?php echo base_url('admon/usuarios/habilitar_json')?>',
                            dataType: 'json'
                        }).done(function (data) {
                            var obj = JSON.stringify(data);
                            swal("¡Inhabilitado!", "El usuario ha sido inhabilitado.", "success");
                            btn.closest('div.contact-box').find('a.cuadro_usuario').removeClass("usuario_inhabilitado");
                            btn.find('span.bold').html('Inhabilitar');
                            btn.addClass('inhabilitar');
                            btn.removeClass('habilitar');
                        }).fail(function (jqXHR, textStatus) {
                            swal("Error", "Hubo un error al borrar " + textStatus, "error");
                        });
                    } else {
                        swal("Cancelado", "No se realizó ningún cambio", "error");
                    }
                }
            );
        });

    });

</script>
</body>

</html>
