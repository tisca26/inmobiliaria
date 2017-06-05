<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Propiedades | <?php echo EMPRESA_NOMBRE; ?></title>

    <link href="<?php echo cdn_assets(); ?>/admon/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo cdn_assets(); ?>/admon/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo cdn_assets(); ?>/admon/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

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
                            Propiedades disponibles
                        </h1>
                        <small>Listado de todas las propiedades, si desea agregar una nueva <a class="btn btn-success btn-xs" href="<?php echo base_url('admon/propiedades/insertar')?>">de click aquí</a></small>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php echo get_bootstrap_alert(); ?>
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Propiedades Destacadas </h5>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th># ID</th>
                                    <th>Tipo</th>
                                    <th>Estatus Prop</th>
                                    <th>Calle</th>
                                    <th>Municipio</th>
                                    <th>Estado</th>
                                    <th>Precio Público</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($destacadas as $destacada): ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url('admon/propiedades/editar/' . $destacada->propiedades_id); ?>">
                                                <?php echo $destacada->propiedades_id; ?>
                                            </a>
                                        </td>
                                        <td><?php echo $destacada->tipo_propiedad; ?></td>
                                        <td><?php echo $destacada->estatus_propiedad; ?></td>
                                        <td><?php echo $destacada->calle; ?></td>
                                        <td><?php echo $destacada->municipio; ?></td>
                                        <td><?php echo $destacada->estado; ?></td>
                                        <td>$<?php echo number_format($destacada->precio_publico); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Propiedades Página Inicio </h5>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th># ID</th>
                                    <th>Tipo</th>
                                    <th>Estatus Prop</th>
                                    <th>Calle</th>
                                    <th>Municipio</th>
                                    <th>Estado</th>
                                    <th>Precio Público</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($iniciales as $inicial): ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url('admon/propiedades/editar/' . $inicial->propiedades_id); ?>">
                                                <?php echo $inicial->propiedades_id; ?>
                                            </a>
                                        </td>
                                        <td><?php echo $inicial->tipo_propiedad; ?></td>
                                        <td><?php echo $inicial->estatus_propiedad; ?></td>
                                        <td><?php echo $inicial->calle; ?></td>
                                        <td><?php echo $inicial->municipio; ?></td>
                                        <td><?php echo $inicial->estado; ?></td>
                                        <td>$<?php echo number_format($inicial->precio_publico); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Propiedades Ofertas Especiales </h5>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th># ID</th>
                                    <th>Tipo</th>
                                    <th>Estatus Prop</th>
                                    <th>Calle</th>
                                    <th>Municipio</th>
                                    <th>Estado</th>
                                    <th>Precio Público</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($ofertas as $oferta): ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url('admon/propiedades/editar/' . $oferta->propiedades_id); ?>">
                                                <?php echo $oferta->propiedades_id; ?>
                                            </a>
                                        </td>
                                        <td><?php echo $oferta->tipo_propiedad; ?></td>
                                        <td><?php echo $oferta->estatus_propiedad; ?></td>
                                        <td><?php echo $oferta->calle; ?></td>
                                        <td><?php echo $oferta->municipio; ?></td>
                                        <td><?php echo $oferta->estado; ?></td>
                                        <td>$<?php echo number_format($oferta->precio_publico); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Todas las Propiedades Registradas en el Sistema</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                    <tr>
                                        <th># ID</th>
                                        <th>Tipo</th>
                                        <th>Estatus Prop</th>
                                        <th>Calle</th>
                                        <th>Municipio</th>
                                        <th>Estado</th>
                                        <th>Precio Público</th>
                                        <th>Visible</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($propiedades as $propiedad): ?>
                                        <tr>
                                            <td class="text-center">
                                                <a href="<?php echo base_url('admon/propiedades/editar/' . $propiedad->propiedades_id); ?>">
                                                    <?php echo $propiedad->propiedades_id; ?>
                                                </a>
                                            </td>
                                            <td><?php echo $propiedad->tipo_propiedad; ?></td>
                                            <td><?php echo $propiedad->estatus_propiedad; ?></td>
                                            <td><?php echo $propiedad->calle; ?></td>
                                            <td><?php echo $propiedad->municipio; ?></td>
                                            <td><?php echo $propiedad->estado; ?></td>
                                            <td>$<?php echo number_format($propiedad->precio_publico); ?></td>
                                            <td class="text-center"><?php echo ((bool)$propiedad->estatus)? 'Si' : 'No'; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Prop ID</th>
                                        <th>Tipo</th>
                                        <th>Estatus Prop</th>
                                        <th>Calle</th>
                                        <th>Municipio</th>
                                        <th>Estado</th>
                                        <th>Precio Público</th>
                                        <th>Visible</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
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

<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/dataTables/datatables.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo cdn_assets(); ?>/admon/js/inspinia.js"></script>
<script src="<?php echo cdn_assets(); ?>/admon/js/plugins/pace/pace.min.js"></script>
<script>
    $(document).ready(function () {
        $('.dataTables-example').DataTable({
            language: {
                aria: {
                    sortAscending: ": activar para ordenar la columna ascendentemente",
                    sortDescending: ": activar para ordenar la columna descendentemente"
                },
                emptyTable: "No hay datos para mostrar",
                info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                infoEmpty: "No fue encontrado algún registro",
                infoFiltered: "(filtered1 de _MAX_ registros totales)",
                lengthMenu: "Mostrar _MENU_",
                search: "Buscar:",
                zeroRecords: "No se encontraron registros coincidentes",
                paginate: {
                    previous: "Prev",
                    next: "Sig",
                    last: "Último",
                    first: "Primero"
                }
            },
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                {extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'Propiedades <?php echo EMPRESA_NOMBRE; ?>'},
                {extend: 'pdf', title: 'Propiedades <?php echo EMPRESA_NOMBRE; ?>'},
                {
                    extend: 'print',
                    customize: function (win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });

</script>
</body>

</html>
