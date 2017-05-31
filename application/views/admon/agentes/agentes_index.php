<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agentes | <?php echo EMPRESA_NOMBRE; ?></title>

    <link href="<?php echo cdn_assets(); ?>/admon/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo cdn_assets(); ?>/admon/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="<?php echo cdn_assets(); ?>/admon/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <link href="<?php echo cdn_assets(); ?>/admon/css/animate.css" rel="stylesheet">
    <link href="<?php echo cdn_assets(); ?>/admon/css/style.css" rel="stylesheet">

    <style>
        .agente_inhabilitado{
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
                            Agentes disponible
                        </h1>
                        <small>Seleccine el agente para ver sus detalles y editarlos</small>
                    </div>
                    <br>
                </div>
            </div>
            <div class="row">
                <?php echo get_bootstrap_alert(); ?>
                <?php foreach ($agentes as $agente): ?>
                    <div class="col-lg-3">
                        <div class="contact-box center-version">
                            <a href="<?php echo base_url('admon/agentes/editar/' . $agente->agentes_id)?>" class="<?php echo ($agente->estatus == '1') ? '' : 'agente_inhabilitado' ?>">
                                <img alt="<?php echo EMPRESA_NOMBRE; ?>" class="img-circle" src="<?php echo $agente->img_profile; ?>">

                                <h3 class="m-b-xs"><strong><?php echo "$agente->nombre $agente->apellido_paterno $agente->apellido_materno"; ?></strong></h3>

                                <div class="font-bold">Agente de Ventas</div>
                                <address class="m-t-md">
                                    <strong><?php EMPRESA_NOMBRE; ?></strong><br>
                                    <?php echo $agente->email; ?><br>
                                    <abbr title="Phone">Móvil:</abbr> <?php echo "$agente->tel_movil"; ?><br>
                                    <abbr title="Phone">Fijo:</abbr> <?php echo "$agente->tel_fijo" . (isset($agente->tel_fijo_ext)? ' - ' . $agente->tel_fijo_ext : ''); ?>
                                </address>

                            </a>
                            <div class="contact-box-footer">
                                <div class="m-t-xs btn-group text-center">
                                    <button class="btn btn-danger btn-sm <?php echo ($agente->estatus == '1') ? 'inhabilitar' : 'habilitar' ?>" type="button" data-id="<?php echo $agente->agentes_id; ?>"><i
                                                class="fa fa-warning"></i>
                                        <span class="bold"><?php echo ($agente->estatus == '1') ? 'Inhabilitar' : 'Habilitar' ?></span>
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

        $('.inhabilitar').click(function () {
            var btn = $(this);
            swal({
                    title: "¿Desea borrarlo?",
                    text: "El agente quedará inhabilitado",
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
                                'agentes_id': btn.attr('data-id')
                            },
                            url: '<?php echo base_url('admon/agentes/habilitar_json')?>',
                            dataType: 'json'
                        }).done(function (data) {
                            var obj = JSON.stringify(data);
                            swal("¡Inhabilitado!", "El agente ha sido habilitado. con " + btn.attr('data-id') + ' y ' + data.msg, "success");
                        }).fail(function (jqXHR, textStatus) {
                            swal("Error", "Hubo un error al borrar " + textStatus , "error");
                        });
                    } else {
                        swal("Cancelado", "No se realizó ningún cambio", "error");
                    }
                }
            );
        });

        $('.habilitar').click(function () {
            var btn = $(this);
            swal({
                    title: "¿Desea habilitarlo?",
                    text: "El agente quedará habilitado",
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
                                'agentes_id': btn.attr('data-id')
                            },
                            url: '<?php echo base_url('admon/agentes/inhabilitar_json')?>',
                            dataType: 'json'
                        }).done(function (data) {
                            var obj = JSON.stringify(data);
                            swal("¡Inhabilitado!", "El agente ha sido inhabilitado. con " + btn.attr('data-id') + ' y ' + data.msg, "success");
                        }).fail(function (jqXHR, textStatus) {
                            swal("Error", "Hubo un error al borrar " + textStatus , "error");
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
