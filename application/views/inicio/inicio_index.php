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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
          rel="stylesheet" type="text/css">

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

        <div class="slider-container light rev_slider_wrapper" style="height: 650px;">
            <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider
                 data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'arrows': {'enable': true, 'left':{'container':'slider','h_align':'right','v_align':'center','h_offset':20,'v_offset':-80},'right':{'container':'slider','h_align':'right','v_align':'center','h_offset':20,'v_offset':80}}}}">
                <div class="slides-number hidden-xs">
                    <span class="atual">1</span>
                    <span class="total"><?php echo $cuantas_destacadas; ?></span>
                </div>
                <ul>
                    <?php foreach ($propiedades_destacadas as $prop): ?>
                        <li data-transition="fade">
                            <img src="<?php echo $prop->img; ?>"
                                 alt="OKAN Real State"
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 class="rev-slidebg">

                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after"
                                 id="slide-529-layer-1"
                                 data-x="left" data-hoffset="15"
                                 data-y="center" data-voffset="0"
                                 data-width="360"
                                 data-height="360"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                                 data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                                 data-start="500"
                                 data-responsive_offset="on"
                                 style="background-color: rgb(255, 255, 255); padding: 30px; overflow: hidden;">
                                <span class="featured-border"
                                      style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;"></span>
                                <span class="feature-tag" data-width="50" data-height="50"
                                      style="background: #2bca6e; color: #FFF; text-transform: uppercase; padding: 15px 102px; position: absolute; right: -24%; top: 6%; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg);">
                                    <?php echo trans_line('destacado'); ?>
                                </span>
                            </div>

                            <div class="tp-caption main-label"
                                 data-x="left" data-hoffset="35"
                                 data-y="center" data-voffset="-50"
                                 data-start="1500"
                                 data-whitespace="nowrap"
                                 data-transform_in="y:[-100%];s:500;"
                                 data-transform_out="opacity:0;s:500;"
                                 data-textAlign="center"
                                 style="z-index: 5; font-size: 1.9em; color: #000; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;"
                                 data-mask_in="x:0px;y:0px;"><?php echo $prop->calle . ' - ' . $prop->no_exterior; ?>
                            </div>

                            <div class="tp-caption"
                                 data-x="left" data-hoffset="35"
                                 data-y="center" data-voffset="0"
                                 data-start="1500"
                                 data-height="44"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                                 data-transform_out="x:left;s:1200;e:Power3.easeInOut;"
                                 data-textAlign="center"
                                 style="z-index: 5; font-size: 3em; font-weight: 400; text-transform: uppercase; color: #219cd2; line-height: 0.8em; width: 27vw; max-width: 320px;"
                                 data-mask_in="x:0px;y:0px;">$<?php echo number_format($prop->precio_publico); ?>
                            </div>

                            <a class="tp-caption slide-button"
                               href="<?php echo base_url_lang_slash() . 'propiedades/ver/' . $prop->propiedades_id; ?>"
                               data-x="left" data-hoffset="108"
                               data-y="center" data-voffset="60"
                               data-start="1500"
                               data-whitespace="nowrap"
                               data-transform_in="y:[100%];s:500;"
                               data-transform_out="opacity:0;s:500;"
                               style="z-index: 5; font-size: 1em; text-transform: uppercase; background: #219cd2; padding: 12px 35px; color: #FFF;"
                               data-mask_in="x:0px;y:0px;"><?php echo trans_line('ver_propiedad'); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row pt-xlg mt-xlg">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="font-weight-normal mb-xs">
                                <?php echo trans_line('listado_para'); ?> <strong
                                        class="text-color-secondary font-weight-extra-bold"><?php echo trans_line('venta'); ?></strong>
                                <span class="font-weight-light"><?php echo trans_line('o'); ?></span> <strong
                                        class="text-color-secondary font-weight-extra-bold"><?php echo trans_line('renta'); ?></strong>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <ul id="listingLoadMoreWrapper" class="properties-listing sort-destination p-none"
                            data-total-pages="2">
                            <?php foreach ($propiedades_pagina_inicio as $prop_inicio): ?>
                                <li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
                                    <div class="listing-item">
                                        <a href="<?php echo base_url_lang_slash() . 'propiedades/ver/' . $prop_inicio->propiedades_id ?>"
                                           class="text-decoration-none">
                                        <span class="thumb-info thumb-info-lighten">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo $prop_inicio->img; ?>"
                                                     class="img-responsive" alt="OKAN Real State">
                                                <span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
                                                    <?php echo trans_line($prop_inicio->estatus_propiedad); ?>
                                                </span>
                                            </span>
                                            <span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
                                                $ <?php echo number_format($prop_inicio->precio_publico); ?>
                                                <i class="fa fa-caret-right text-color-secondary pull-right"></i>
                                            </span>
                                            <span class="custom-thumb-info-title b-normal p-lg">
                                                <span class="thumb-info-inner text-md"><?php echo $prop_inicio->municipio; ?></span>
                                                <ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
                                                    <li>
                                                        <span class="accomodation-title">
                                                            <?php echo trans_line('cuartos'); ?>:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            <?php echo $prop_inicio->cuartos + 0; ?>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            <?php echo trans_line('banos'); ?>:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            <?php echo $prop_inicio->banos + 0; ?>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-title">
                                                            <?php echo trans_line('m2'); ?>:
                                                        </span>
                                                        <span class="accomodation-value custom-color-1">
                                                            <?php echo $prop_inicio->metros_utiles + 0; ?>
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
                        <div class="col-md-12 text-center">
                            <div id="listingLoadMoreLoader" class="listing-load-more-loader">
                                <div class="bounce-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>

                            <a href="<?php echo base_url_lang_slash() . 'propiedades' ?>" id="" type="button"
                               class="btn btn-secondary btn-xs font-size-md text-uppercase outline-none p-md pl-xlg pr-xlg m-auto mb-xlg mt-xlg">
                                <?php echo trans_line('cargar_mas'); ?>
                            </a>
                        </div>
                    </div>
                    <hr class="dashed">
                    <div class="row pb-lg mt-xlg">
                        <div class="col-md-12">
                            <h2 class="mt-xs mb-none"><?php echo trans_line('ubicaciones_exclusivas'); ?></h2>
                        </div>
                    </div>
                    <div class="row pb-lg mb-xlg">
                        <?php $busqueda_dto = obtener_buscador_dto(); ?>
                        <?php foreach ($busqueda_dto->ubicaciones as $busqueda_ubicacion): ?>
                            <div class="col-sm-4 col-md-4">
                                <div class="special-offer-item center text-color-light">
                                    <a href="<?php echo base_url_lang_slash() . 'propiedades/ver_ubicacion/' . urlencode($busqueda_ubicacion->estado); ?>"
                                       class="text-decoration-none">
                                    <span class="special-offer-wrapper">
                                        <img src="<?php echo cdn_assets(); ?>/img/demos/real-estate/logo_alto.png"
                                             class="img-responsive" alt="<?php EMPRESA_NOMBRE; ?>">
                                        <span class="special-offer-infos text-color-light">
                                            <span class="special-offer-title font-weight-normal text-lg p-xs mb-xs">
                                                <?php echo $busqueda_ubicacion->estado; ?>
                                            </span>
                                            <button class="btn btn-secondary text-uppercase p-sm pl-md pr-md"><?php echo trans_line('cargar_mas'); ?></button>
                                        </span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <aside class="sidebar">
                        <h2 class="font-weight-normal mb-lg">
                            <?php echo trans_line('ofertas_especiales'); ?>
                        </h2>
                        <?php foreach ($propiedades_oferta_especial as $prop_especial): ?>
                            <div class="special-offer-item center text-color-light">
                                <a href="<?php echo base_url_lang_slash() . 'propiedades/ver/' . $prop_especial->propiedades_id; ?>"
                                   class="text-decoration-none">
                                    <span class="special-offer-wrapper">
                                        <img src="<?php echo $prop_especial->img; ?>" class="" alt="" width="262"
                                             height="280">
                                        <span class="special-offer-infos text-color-light pt-lg">
                                            <span class="special-offer-description font-weight-light text-lg">
                                                <?php echo $prop_especial->calle . ' - ' . $prop_especial->no_exterior; ?>
                                                <br>
                                                <?php echo $prop_especial->municipio; ?>
                                            </span>
                                            <span class="special-offer-title font-weight-bold text-uppercase text-md pb-xlg mb-md">
                                                <?php echo trans_line('desde'); ?>
                                                : $<?php echo number_format($prop_especial->precio_publico); ?>
                                            </span>
                                            <button class="btn btn-secondary text-uppercase p-sm pl-xlg pr-xlg"><?php echo trans_line('ver_mas'); ?></button>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        <?php endforeach; ?>

                        <div class="agents text-color-light center">
                            <h4 class="text-light pt-xl m-none"><?php echo trans_line('nuestros_agentes'); ?></h4>
                            <div class="owl-carousel owl-theme nav-bottom rounded-nav pl-xs pr-xs pt-md m-none"
                                 data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">
                                <?php foreach ($agentes as $agente): ?>
                                    <div class="pr-sm pl-sm">
                                        <a href="<?php echo base_url_lang_slash() . 'agentes'; ?>"
                                           class="text-decoration-none">
                                            <span class="agent-thumb">
                                                <img class="img-responsive img-circle"
                                                     src="<?php echo $agente->img_profile; ?>"
                                                     alt="<?php EMPRESA_NOMBRE; ?>"/>
                                            </span>
                                            <span class="agent-infos text-light pt-md">
                                                <strong class="text-uppercase font-weight-bold"><?php echo $agente->nombre . ' ' . $agente->apellido_paterno; ?></strong>
                                                <span class="font-weight-light"><?php echo $agente->tel_movil; ?></span>
                                                <span class="font-weight-light"><?php echo $agente->email; ?></span>
                                            </span>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                                <div class="pr-sm pl-sm">
                                    <a href="<?php echo base_url_lang_slash() . 'agentes'; ?>"
                                       class="text-decoration-none">
                                        <span class="agent-thumb">
                                            <img class="img-responsive img-circle"
                                                 src="<?php echo base_url_slash() . AGENTE_IMG_BASE; ?>"
                                                 alt="<?php echo EMPRESA_NOMBRE; ?>"/>
                                        </span>
                                        <span class="agent-infos text-light pt-md">
                                            <strong class="text-uppercase font-weight-bold"><?php echo EMPRESA_NOMBRE; ?></strong>
                                            <span class="font-weight-light"><?php echo EMPRESA_TELEFONO; ?></span>
                                            <span class="font-weight-light"><?php echo EMPRESA_MAIL; ?></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="newsletter box-shadow-custom p-xlg center">
                            <i class="icon-envelope-letter icons"></i>
                            <h4 class="mt-xs mb-xs">
                                <?php echo trans_line('boletin'); ?>
                            </h4>
                            <p>
                                <?php echo trans_line('boletin_parrafo'); ?>
                            </p>

                            <div class="alert alert-success hidden" id="newsletterSuccess">
                                <?php echo trans_line('boletin_exito'); ?>
                            </div>

                            <div class="alert alert-danger hidden" id="newsletterError"></div>

                            <form id="newsletterForm" class="text-black pt-sm" action="<?php echo base_url() . 'inicio/alta_boletin' ?>"
                                  method="POST">
                                <input class="form-control" placeholder="<?php echo trans_line('boletin_nombre'); ?>"
                                       name="newsletterName"
                                       id="newsletterName" type="text">
                                <input class="form-control" placeholder="<?php echo trans_line('boletin_email'); ?>"
                                       name="newsletterEmail"
                                       id="newsletterEmail" type="text">
                                <button class="btn btn-default text-uppercase background-color-secondary pt-sm pr-xlg pb-sm pl-xlg mt-xlg text-light"
                                        type="submit"><?php echo trans_line('suscribirse'); ?>
                                </button>
                            </form>
                        </div>
                    </aside>
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
</body>
</html>
