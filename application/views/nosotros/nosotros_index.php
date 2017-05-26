<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Porto - Responsive HTML5 Template 5.7.2</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo cdn_assets(); ?>/img/favicon.ico" type="image/x-icon" />
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
    <header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 37, 'stickySetTop': '-37px', 'stickyChangeLogo': false}">
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
                                <img alt="Porto" width="143" height="40" src="<?php echo cdn_assets() . EMPRESA_LOGO; ?>">
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-nav">
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
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
                        <h1><?php echo trans_line('Nosotros'); ?></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="<?php echo base_url_lang(); ?>"><?php echo trans_line('breadcrumb_inicio'); ?></a></li>
                            <li><a href="#"><?php echo trans_line('breadcrumb_pagina'); ?></a></li>
                            <li class="active"><?php echo trans_line('breadcrumb_subpagina'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row pb-xl pt-md">
                <div class="col-md-9">

                    <p class="lead mb-xl"><?php echo trans_line('p01'); ?></p>

                    <img width="400" class="img-responsive pull-right ml-xl mb-xl mt-xs" alt="" src="<?php echo cdn_assets(); ?>/img/demos/real-estate/agency.jpg">

                    <p><?php echo trans_line('p02'); ?></p>

                    <p><?php echo trans_line('p03'); ?></p>

                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="mt-xlg mb-md"><?php echo trans_line('nuestra_mision'); ?></h4>

                            <p><?php echo trans_line('mision_p01'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="mt-xlg mb-md"><?php echo trans_line('nuestra_vision'); ?></h4>

                            <p><?php echo trans_line('vision_p01'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="mt-xlg mb-md"><?php echo trans_line('nuestros_valores'); ?></h4>

                            <p><?php echo trans_line('valores_p01'); ?></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <aside class="sidebar">
                        <div class="agents text-color-light center">
                            <h4 class="text-light pt-xl m-none"><?php echo trans_line('nuestros_agentes'); ?></h4>
                            <div class="owl-carousel owl-theme nav-bottom rounded-nav pl-xs pr-xs pt-md m-none"
                                 data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">
                                <?php foreach ($agentes as $agente): ?>
                                    <div class="pr-sm pl-sm">
                                        <a href="<?php echo base_url_lang_slash() . 'agentes'; ?>" class="text-decoration-none">
                                            <span class="agent-thumb">
                                                <img class="img-responsive img-circle" src="<?php echo $agente->img_profile; ?>" alt="<?php EMPRESA_NOMBRE; ?>"/>
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
                                    <a href="<?php echo base_url_lang_slash() . 'agentes'; ?>" class="text-decoration-none">
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

                            <form id="newsletterForm" class="text-black pt-sm" action="php/newsletter-subscribe.php" method="POST">
                                <input class="form-control" placeholder="<?php echo trans_line('boletin_nombre'); ?>" name="newsletterName" id="newsletterName" type="text">
                                <input class="form-control" placeholder="<?php echo trans_line('boletin_email'); ?>" name="newsletterEmail" id="newsletterEmail" type="text">
                                <button class="btn btn-default text-uppercase background-color-secondary pt-sm pr-xlg pb-sm pl-xlg mt-xlg text-light" type="submit"><?php echo trans_line('suscribirse'); ?></button>
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



</body>
</html>
