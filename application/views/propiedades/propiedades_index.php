<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo trans_line('title'); ?></title>

    <meta name="keywords" content="<?php echo trans_line('meta_keywords'); ?>"/>
    <meta name="description" content="<?php echo trans_line('meta_description'); ?>">
    <meta name="author" content="<?php echo trans_line('meta_author'); ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo cdn_assets(); ?>/img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="<?php echo cdn_assets(); ?>/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/theme.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/theme-elements.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/theme-blog.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/vendor/rs-plugin/css/navigation.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/skins/skin-real-estate.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/demos/demo-real-estate.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>/css/custom.css">

    <!-- Head Libs -->
    <script src="<?php echo cdn_assets(); ?>/vendor/modernizr/modernizr.min.js"></script>

</head>
<body class="loading-overlay-showing" data-loading-overlay>
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div class="body">
    <header id="header" class="header-narrow"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 37, 'stickySetTop': '-37px', 'stickyChangeLogo': false}">
        <div class="header-body background-color-primary pt-none pb-none">
            <div class="header-top header-top header-top-style-3 header-top-custom background-color-primary m-none">
                <div class="container">
                    <nav class="header-nav-top pull-left">
                        <?php echo genera_menu_datos_top(); ?>
                    </nav>
                    <nav class="header-nav-top langs pull-right mr-none">
                        <?php echo genera_menu_idioma(); ?>
                    </nav>
                </div>
            </div>
            <div class="header-container container custom-position-initial">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="<?php echo base_url_lang(); ?>">
                                <img alt="<?php echo EMPRESA_NOMBRE; ?>" width="190" height="75"
                                     src="<?php echo cdn_assets() . EMPRESA_LOGO; ?>">
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-nav">
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse m-none">
                                    <!-- Menu generado -->
                                    <?php $this->menu_manager->generar_menu(); ?>
                                    <!-- /Menu generado -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div role="main" class="main">

        <section class="page-header page-header-light page-header-more-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo trans_line('Propiedades'); ?>
                            <span><?php echo trans_line('listado_para_venta_renta'); ?>
                                - <?php echo $cuantas_propiedades; ?> <?php echo trans_line('propiedades'); ?></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li>
                                <a href="<?php echo base_url_lang(); ?>"><?php echo trans_line('breadcrumb_inicio'); ?></a>
                            </li>
                            <li class="active"><?php echo trans_line('breadcrumb_pagina'); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-lg">
                    <div class="col-md-12">
                        <form id="propertiesForm" action="<?php echo base_url_lang_slash() . 'propiedades/buscar'?>" method="POST">
                            <div class="row">
                                <?php $busqueda_dto = obtener_buscador_dto(); ?>
                                <div class="col-md-2">
                                    <div class="form-control-custom mb-md">
                                        <select class="form-control text-uppercase font-size-sm"
                                                name="propertiesPropertyType"
                                                data-msg-required="This field is required." id="propertiesPropertyType">
                                            <option value=""><?php echo trans_line('buscador_tipo_propiedad'); ?></option>
                                            <?php foreach ($busqueda_dto->tipos_propiedades as $busqueda_tipos_propiedades): ?>
                                                <option value="<?php echo $busqueda_tipos_propiedades->tipo_propiedad_id; ?>" <?php echo set_select('propertiesPropertyType', $busqueda_tipos_propiedades->tipo_propiedad_id); ?>><?php echo trans_line($busqueda_tipos_propiedades->nombre); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-control-custom mb-md">
                                        <select class="form-control text-uppercase font-size-sm"
                                                name="propertiesLocation" data-msg-required="This field is required."
                                                id="propertiesLocation">
                                            <option value=""><?php echo trans_line('buscador_estado'); ?></option>
                                            <?php foreach ($busqueda_dto->ubicaciones as $busqueda_ubicacion): ?>
                                                <option value="<?php echo $busqueda_ubicacion->estado; ?>" <?php echo set_select('propertiesLocation', $busqueda_ubicacion->estado); ?>><?php echo $busqueda_ubicacion->estado; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-control-custom mb-md">
                                        <select class="form-control text-uppercase font-size-sm"
                                                name="propertiesMinBeds"
                                                data-msg-required="This field is required."
                                                id="propertiesMinBeds">
                                            <option value=""><?php echo trans_line('buscador_cuartos'); ?></option>
                                            <?php foreach ($busqueda_dto->cuartos as $busqueda_cuarto): ?>
                                                <option value="<?php echo $busqueda_cuarto; ?>" <?php echo set_select('propertiesMinBeds', $busqueda_cuarto); ?>><?php echo $busqueda_cuarto; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-control-custom mb-md">
                                        <select class="form-control text-uppercase font-size-sm"
                                                name="propertiesMinPrice" data-msg-required="This field is required."
                                                id="propertiesMinPrice">
                                            <option value=""><?php echo trans_line('buscador_precio_min'); ?></option>
                                            <?php foreach ($busqueda_dto->precios as $busqueda_precio): ?>
                                                <option value="<?php echo $busqueda_precio; ?>" <?php echo set_select('propertiesMinPrice', $busqueda_precio); ?>>$<?php echo number_format($busqueda_precio); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-control-custom mb-md">
                                        <select class="form-control text-uppercase font-size-sm"
                                                name="propertiesMaxPrice" data-msg-required="This field is required."
                                                id="propertiesMaxPrice">
                                            <option value=""><?php echo trans_line('buscador_precio_max'); ?></option>
                                            <?php foreach ($busqueda_dto->precios as $busqueda_precio): ?>
                                                <option value="<?php echo $busqueda_precio; ?>" <?php echo set_select('propertiesMaxPrice', $busqueda_precio); ?>>$<?php echo number_format($busqueda_precio); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" value="<?php echo trans_line('buscar'); ?>"
                                           class="btn btn-secondary btn-lg btn-block text-uppercase font-size-sm">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row mb-lg">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', '</div>'); ?>
                <?php echo get_bootstrap_alert(); ?>
                <ul class="properties-listing sort-destination p-none">
                    <?php foreach ($propiedades as $prop): ?>
                        <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                            <div class="listing-item">
                                <a href="<?php echo base_url_lang_slash() . 'propiedades/ver/' . $prop->propiedades_id; ?>"
                                   class="text-decoration-none">
                                <span class="thumb-info thumb-info-lighten">
                                    <span class="thumb-info-wrapper m-none">
                                        <img src="<?php echo $prop->img; ?>"
                                             class="img-responsive" alt="">
                                        <span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
                                            <?php echo trans_line($prop->estatus_propiedad); ?>
                                        </span>
                                    </span>
                                    <span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
                                        $ <?php echo number_format($prop->precio_publico); ?>
                                        <i class="fa fa-caret-right text-color-secondary pull-right"></i>
                                    </span>
                                    <span class="custom-thumb-info-title b-normal p-lg">
                                        <span class="thumb-info-inner text-md"><?php echo $prop->municipio; ?></span>
                                        <ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
                                            <li>
                                                <span class="accomodation-title">
                                                    <?php echo trans_line('cuartos'); ?>:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    <?php echo $prop->cuartos + 0; ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    <?php echo trans_line('banos'); ?>:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    <?php echo $prop->banos + 0; ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    <?php echo trans_line('m2'); ?>:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    <?php echo $prop->metros_construidos + 0; ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </span>
                                </span>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="row mt-lg mb-xlg">
                <div class="col-md-12 center">
                    <ul class="pagination">
                        <?php echo $links_paginacion; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- FOOTER INICIO -->
        <?php echo $this->cargar_elementos_manager->carga_con_lang('footers/footers_web_1'); ?>
        <!-- FOOTER FIN -->
    </div>
</div>

<!-- Vendor -->
<script src="<?php echo cdn_assets(); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/common/common.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo cdn_assets(); ?>/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?php echo cdn_assets(); ?>/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo cdn_assets(); ?>/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?php echo cdn_assets(); ?>/js/views/view.contact.js"></script>

<!-- Demo -->
<script src="<?php echo cdn_assets(); ?>/js/demos/demo-real-estate.js"></script>

<!-- Theme Custom -->
<script src="<?php echo cdn_assets(); ?>/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo cdn_assets(); ?>/js/theme.init.js"></script>

<?php $this->cargar_elementos_manager->carga_simple('elementos_extras/g_analytics'); ?>
<?php $this->cargar_elementos_manager->carga_simple('elementos_extras/chat_tawk'); ?>
</body>
</html>
