<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo trans_line('title'); ?></title>

    <meta name="keywords" content="<?php echo trans_line('meta_keywords'); ?>" />
    <meta name="description" content="<?php echo trans_line('meta_description'); ?>">
    <meta name="author" content="<?php echo trans_line('meta_author'); ?>">

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
                                <img alt="<?php echo EMPRESA_NOMBRE; ?>" width="190" height="75"
                                     src="<?php echo cdn_assets() . EMPRESA_LOGO; ?>">
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
                        <h1><?php echo trans_line('Contacto'); ?></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="<?php echo base_url_lang(); ?>"><?php echo trans_line('breadcrumb_inicio'); ?></a></li>
                            <li class="active"><?php echo trans_line('breadcrumb_pagina'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <h4 class="heading-primary mt-lg"><?php echo trans_line('enviar_mensaje'); ?></h4>
                    <p><?php echo trans_line('contacto_p01'); ?></p>

                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                        <?php echo trans_line('contacto_exito'); ?>
                    </div>

                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                        <?php echo trans_line('contacto_error'); ?>
                        <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                    </div>

                    <form id="contactForm" action="<?php echo base_url() . 'contacto/enviar_correo'; ?>" method="POST">
                        <input type="hidden" value="Contact Form" name="subject" id="subject">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label><?php echo trans_line('c_nombre'); ?> *</label>
                                    <input type="text" value="" data-msg-required="<?php echo trans_line('c_p_nombre'); ?>" maxlength="100" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="col-md-4">
                                    <label><?php echo trans_line('c_email'); ?> *</label>
                                    <input type="email" value="" data-msg-required="<?php echo trans_line('c_p_email'); ?>" data-msg-email="<?php echo trans_line('c_p_email2'); ?>" maxlength="100" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="col-md-4">
                                    <label><?php echo trans_line('c_tel'); ?> *</label>
                                    <input type="text" value="" data-msg-required="<?php echo trans_line('c_p_tel'); ?>" maxlength="20" class="form-control" name="telefono" id="telefono" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label><?php echo trans_line('c_mensaje'); ?> *</label>
                                    <textarea maxlength="5000" data-msg-required="<?php echo trans_line('c_p_mensaje'); ?>" rows="5" class="form-control" name="message" id="message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="<?php echo trans_line('c_enviar'); ?>" class="btn btn-secondary mb-xlg"
                                       data-loading-text="<?php echo trans_line('c_cargando'); ?>">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">

                    <h4 class="heading-primary mt-lg"><?php echo trans_line('oficina'); ?></h4>
                    <ul class="list list-icons mt-md">
                        <li>
                            <a href="<?php echo base_url_lang_slash() . 'contacto'; ?>">
                                <i class="icon-envelope-open icons"></i> <?php echo EMPRESA_MAIL; ?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-call-out icons"></i> <?php echo EMPRESA_TELEFONO; ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo EMPRESA_TWITTER; ?>">
                                <i class="icon-social-twitter icons"></i> Twitter
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo EMPRESA_FACEBOOK; ?>">
                                <i class="icon-social-facebook icons"></i> Facebook
                            </a>
                        </li>
                    </ul>

                    <hr class="solid mt-xlg mb-xlg">

                    <h4 class="heading-primary"><?php echo trans_line('horario'); ?></h4>
                    <ul class="list list-icons mt-md">
                        <li><i class="fa fa-clock-o"></i> <?php echo trans_line('horario_semana'); ?></li>
                        <li><i class="fa fa-clock-o"></i> <?php echo trans_line('horario_sabado'); ?></li>
                        <li><i class="fa fa-clock-o"></i> <?php echo trans_line('horario_domingo'); ?></li>
                    </ul>

                </div>

            </div>

        </div>

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map mt-xlg mb-none"></div>

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


<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GMAPS_APIKEY; ?>"></script>
<script>

    /*
     Map Settings

     Find the Latitude and Longitude of your address:
     - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
     - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

     */

    // Map Markers
    var mapMarkers = [{
        address: "<?php echo EMPRESA_DIRECCION; ?>",
        html: "<strong><?php echo EMPRESA_NOMBRE; ?></strong>",
        icon: {
            image: "<?php echo base_url(); ?>/assets/img/demos/real-estate/pin_okan.png",
            iconsize: [80, 27],
            iconanchor: [80, 27]
        },
        popup: true
    }];

    // Map Initial Location
    var initLatitude = 19.3979907;
    var initLongitude = -99.1728932;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: (($.browser.mobile) ? false : true),
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 16
    };

    var map = $('#googlemaps').gMap(mapSettings),
        mapRef = $('#googlemaps').data('gMap.reference');

    // Map Center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

    // Create an array of styles.
    var mapColor = "#cfa968";

    var styles = [{
        stylers: [{
            hue: mapColor
        }]
    }, {
        featureType: "road",
        elementType: "geometry",
        stylers: [{
            lightness: 0
        }, {
            visibility: "simplified"
        }]
    }, {
        featureType: "road",
        elementType: "labels",
        stylers: [{
            visibility: "off"
        }]
    }];

    // Styles from https://snazzymaps.com/
    var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

    var styledMap = new google.maps.StyledMapType(styles, {
        name: 'Styled Map'
    });

    mapRef.mapTypes.set('map_style', styledMap);
    mapRef.setMapTypeId('map_style');

</script>



</body>
</html>
